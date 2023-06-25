<?php

/*BLOCS DE TEXTE CONFIGURABLES EN MODE NON CONNECTE OU EN MODE CONNECTE*/

// Mesure de sécurité
if (!defined('_PS_VERSION_')) {
	exit;
};

// Création et paramétrage de mon module via le constructeur
class MyModule extends Module
{
	public function __construct()
	{
		$this->name = 'mymodule';
		$this->tab = 'front_office_features';
		$this->version = '1.0.0';
		$this->author = 'Marianne THOMAS';
		$this->need_instance = 0;
		$this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => '8.99.99.99');
		$this->bootstrap = true;

		parent::__construct();

		$this->displayName = $this->trans('Module de test', [], 'Modules.MyModule.Admin');
		$this->description = $this->trans('Test de custom module', array(), 'Modules.MyModule.Admin');
		$this->confirmUninstall = $this->trans('Voulez-vous vraiment désinstaller ?');

		if (!Configuration::get('MYMODULE_NAME')) {
			$this->warning = $this->trans('Aucun nom fourni');
		};
	}

	// Méthodes d'installation et de désinstallation
	public function install()
	{
		// Gestion du multiboutiques
		if (Shop::isFeatureActive()) {
			Shop::setContext(Shop::CONTEXT_ALL);
		}

		$defaultValues = array(
			'MYMODULE_TEXT_GUEST' => '',
			'MYMODULE_TEXT_LOGGED' => '',
		);
		// Màj de la configuration avec les valeurs de $defaultvalues si elles n'existent pas déjà
		foreach ($defaultValues as $key => $value) {
			if (!Configuration::hasKey($key)) {
				Configuration::updateValue($key, $value);
			}
		}
		// Enregistrement des hooks utilisés dans le module
		return (parent::install()
			&& $this->registerHook('displayHome')
			// && $this->registerHook('displayHeader')
			&& $this->registerHook('hookActionFrontControllerSetMedia')
		);
	}


	public function uninstall()
	{
		return (parent::uninstall()
			&& Configuration::deleteByName('MYMODULE_NAME'));
	}

	// Paramétrage de la page de configuration des blocs de texte
	public function getContent()
	{
		$output = '';

		// Vérifie que le formulaire a été soumis
		if (Tools::isSubmit('submit' . $this->name)) {
			// Récupère les valeurs entrées par l'utilisateur
			$textGuest = Tools::getValue('MYMODULE_TEXT_GUEST');
			$textLogged = Tools::getValue('MYMODULE_TEXT_LOGGED');

			// Valide la configuration
			if (empty($textGuest) || empty($textLogged) || !Validate::isGenericName($textGuest) || !Validate::isGenericName($textLogged)) {
				// Erreur en cas de valeur invalide
				$output .= $this->displayError($this->l('Valeur de configuration invalide'));
			} else {
				// Les valeurs sont valides, enregistrement et affichage d'un message de confirmation
				Configuration::updateValue('MYMODULE_TEXT_GUEST', $textGuest);
				Configuration::updateValue('MYMODULE_TEXT_LOGGED', $textLogged);
				$output .= $this->displayConfirmation($this->l('Paramètres mis à jour'));
			}
		}

		$output .= $this->getConfigForm();

		return $output;
	}





	// Paramétrage du formulaire de blocs de texte
	public function getConfigForm()
	{
		$fieldsForm = array(
			'form' => array(
				'legend' => array(
					'title' => $this->l('Configuration'),
					'icon' => 'icon-cogs',
				),
				'input' => array(
					array(
						'type' => 'textarea',
						'label' => $this->l('Bloc de texte en mode non connecté'),
						'name' => 'MYMODULE_TEXT_GUEST',
						'desc' => $this->l('Entrez le texte à afficher en mode non connecté.'),
					),
					array(
						'type' => 'textarea',
						'label' => $this->l('Bloc de texte en mode connecté'),
						'name' => 'MYMODULE_TEXT_LOGGED',
						'desc' => $this->l('Entrez le texte à afficher en mode connecté.'),
					),
				),
				'submit' => array(
					'title' => $this->l('Enregistrer'),
					'class' => 'btn btn-primary',
				),
			),
		);

		// Utilisation de la classe HelperForm pour créer et gérer nos formulaires de blocs de texte
		$helper = new HelperForm();
		$helper->module = $this;
		$helper->name_controller = $this->name;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$helper->currentIndex = AdminController::$currentIndex . '&configure=' . $this->name;
		$helper->default_form_language = $this->context->language->id;
		$helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

		$helper->title = $this->displayName;
		$helper->show_toolbar = true;
		$helper->toolbar_scroll = true;
		$helper->submit_action = 'submit' . $this->name;
		$helper->toolbar_btn = array(
			'save' => array(
				'desc' => $this->l('Save'),
				'href' => AdminController::$currentIndex . '&configure=' . $this->name . '&save' . $this->name .
					'&token=' . Tools::getAdminTokenLite('AdminModules'),
			),
			'back' => array(
				'desc' => $this->l('Back to list'),
				'href' => AdminController::$currentIndex . '&token=' . Tools::getAdminTokenLite('AdminModules'),
			),
		);

		$helper->fields_value['MYMODULE_TEXT_GUEST'] = Configuration::get('MYMODULE_TEXT_GUEST');
		$helper->fields_value['MYMODULE_TEXT_LOGGED'] = Configuration::get('MYMODULE_TEXT_LOGGED');

		return $helper->generateForm(array($fieldsForm));
	}

	//Greffe du module au hook de la page d'accueil
	public function hookDisplayHome($params)
	{
		$textGuest = Configuration::get('MYMODULE_TEXT_GUEST');
		$textLogged = Configuration::get('MYMODULE_TEXT_LOGGED');

		$context = Context::getContext();
		$userIsLogged = $context->customer->isLogged();

		$text = '';

		// Affichage selon le mode (connecté ou non)
		if ($userIsLogged) {
			$text = $textLogged;
		} else {
			$text = $textGuest;
		}

		$this->context->smarty->assign(array(
			'mymodule_text' => $text
		));
		//Lien entre le module et le template qui s'affiche sur la page d'accueil
		return $this->display(__FILE__, 'views/templates/front/mymodule_home.tpl');
	}

	//Greffe de notre page de style au hook en charge du style sur le front
	public function hookHookActionFrontControllerSetMedia($params)
	{
		$this->context->controller->registerStylesheet(
			'mymodule_home',
			'modules/' . $this->name . '/views/css/mymodule_home.css',
			[
				'media' => 'all',
				'priority' => 1000,
			]
		);
	}
}
