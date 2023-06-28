<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.command_handler.update_product_options_handler' shared service.

return $this->services['prestashop.adapter.product.command_handler.update_product_options_handler'] = new \PrestaShop\PrestaShop\Adapter\Product\CommandHandler\UpdateProductOptionsHandler(($this->services['prestashop.adapter.product.repository.product_multi_shop_repository'] ?? $this->load('getPrestashop_Adapter_Product_Repository_ProductMultiShopRepositoryService.php')), ($this->services['prestashop.adapter.product.update.product_indexation_updater'] ?? $this->load('getPrestashop_Adapter_Product_Update_ProductIndexationUpdaterService.php')));
