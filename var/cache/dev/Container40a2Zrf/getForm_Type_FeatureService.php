<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.feature' shared service.

$this->services['form.type.feature'] = $instance = new \PrestaShopBundle\Form\Admin\Sell\Catalog\FeatureType(($this->services['prestashop.adapter.multistore_feature'] ?? $this->getPrestashop_Adapter_MultistoreFeatureService())->isUsed());

$instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));

return $instance;
