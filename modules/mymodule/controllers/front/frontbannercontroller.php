<?php


// DEUXIEME FONCTIONNALITE : visualisation des éléments suivants : 
// 	- Le nombre de produits total actifs sur le site
// - Le prix du panier moyen
// - Lien vers le produit le plus commandé 

// Méthode pour récupérer le nombre total de produits actifs sur le site

class mymodulefrontbannercontrollerModuleFrontController extends ModuleFrontController
{

    public function __construct()
  {
    parent::__construct();
    
  }
    // Méthode pour récupérer le prix moyen du panier
    public function getAverageCartPrice()
    {
        $ordersTotal = Db::getInstance()->getValue('
        SELECT SUM(`total_paid`) 
        FROM `' . _DB_PREFIX_ . 'orders` 
        WHERE `id_customer` = ' . (int)Context::getContext()->customer->id . '
        AND `valid` = 1
    ');

        $orderCount = Db::getInstance()->getValue('
        SELECT COUNT(`id_order`) 
        FROM `' . _DB_PREFIX_ . 'orders` 
        WHERE `id_customer` = ' . (int)Context::getContext()->customer->id . '
        AND `valid` = 1
    ');

        if ($orderCount > 0) {
            $averagePrice = $ordersTotal / $orderCount;
            //Dépréciée mais l'alternative Locale::formatPrice() ne fonctionne pas.
            return Tools::displayPrice($averagePrice);
        }

        return 'N/A';
    }

    // Méthode pour récupérer le lien vers le produit le plus commandé
    public function getMostOrderedProductLink()
    {
        $mostOrderedProductId = Db::getInstance()->getValue('
        SELECT `product_id`
        FROM `' . _DB_PREFIX_ . 'order_detail` 
        WHERE `product_id` IS NOT NULL
        GROUP BY `product_id`
        ORDER BY SUM(`product_quantity`) DESC
        LIMIT 1
    ');

        if ($mostOrderedProductId) {
            $product = new Product($mostOrderedProductId, false, Context::getContext()->language->id);
            return $product->getLink();
        }

        return '#';
    }

    // Méthode pour récupérer la liste des produits actifs sur le site
    public function getProductsCount()
    {
        $sql = 'SELECT COUNT(*) 
            FROM `' . _DB_PREFIX_ . 'product` 
            WHERE `active` = 1';

        $totalActiveProducts = Db::getInstance()->getValue($sql);

        return $totalActiveProducts;
    }

    // Méthode pour récupérer l'id de mon groupe de clients Administrateur Front
    public function getAdminFrontGroupId()
    {
        $groupName = 'Administrateur Front';

        $groupId = (int)Db::getInstance()->getValue('
        SELECT `id_group`
        FROM `' . _DB_PREFIX_ . 'customer_group_lang`
        WHERE `name` = "' . pSQL($groupName) . '"
    ');
        var_dump(_DB_PREFIX_);

        return $groupId;
    }

    //Méthode d'affichage des trois informations en bannière
    public function getAdminFrontBannerData()
    {
        $customer = Context::getContext()->customer;

        if ($customer->isLogged()) {
            $customerGroups = $customer->getGroups();
            $groupId = $this->getAdminFrontGroupId();

            if (in_array($groupId, $customerGroups)) {
                $totalActiveProducts = $this->getProductsCount();
                $averageCartPrice = $this->getAverageCartPrice();
                $mostOrderedProductLink = $this->getMostOrderedProductLink();

                return array(
                    'totalActiveProducts' => $totalActiveProducts,
                    'averageCartPrice' => $averageCartPrice,
                    'mostOrderedProductLink' => $mostOrderedProductLink
                );
            }
        }

        return null;
        
    }

    
    public function hookDisplayTop($params)
    {
        $adminFrontBannerData = $this->getAdminFrontBannerData();

        if ($adminFrontBannerData) {
            $this->context->smarty->assign('adminFrontBannerData', $adminFrontBannerData);
            return $this->display(__FILE__, './views/templates/front/front_banner.tpl');
        }
    }

   


}