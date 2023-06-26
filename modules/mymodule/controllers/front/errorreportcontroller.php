<?php

class ErrorReportController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        // Code pour traiter la soumission du formulaire
        if (Tools::isSubmit('submit_error_report')) {
            // Fermer la modale et afficher un message à la place du bouton
?>
            <script src="/modules/mymodule/views/js/product.js"></script>

<?php
        
            // Code pour envoyer un email à l'administrateur du site
           

            $subject = 'Signalement d\'erreur produit';
            $message = 'ID du produit : ';
            $message .= 'Nom du produit : ';
            $message .= 'Contenu de l\'erreur : ' . $_POST['error-content'];

            Mail::Send(
                (int)Context::getContext()->language->id,
                'error_report',
                $subject,
                array('{message}' => $message),
                Configuration::get('PS_SHOP_EMAIL'),
                null,
                null,
                null,
                null,
                null,
                _PS_MAIL_DIR_,
                true,
                null,
                null
            );


            // Code pour enregistrer les données en base de données
            Db::getInstance()->insert('error_report', $message);
        }
    }
}
