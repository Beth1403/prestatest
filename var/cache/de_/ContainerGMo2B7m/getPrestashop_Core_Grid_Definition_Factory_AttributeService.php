<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.definition.factory.attribute' shared service.

$this->services['prestashop.core.grid.definition.factory.attribute'] = $instance = new \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AttributeGridDefinitionFactory(($this->services['prestashop.core.hook.dispatcher'] ?? $this->getPrestashop_Core_Hook_DispatcherService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))->getCurrentRequest()->attributes->getInt("attributeGroupId"), ($this->services['prestashop.adapter.product.attribute_group.attribute_group_view_data_provider'] ?? $this->load('getPrestashop_Adapter_Product_AttributeGroup_AttributeGroupViewDataProviderService.php')));

$instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));

return $instance;