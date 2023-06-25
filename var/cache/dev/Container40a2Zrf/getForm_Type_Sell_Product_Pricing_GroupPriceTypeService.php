<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.sell.product.pricing.group_price_type' shared service.

return $this->services['form.type.sell.product.pricing.group_price_type'] = new \PrestaShopBundle\Form\Admin\Sell\Product\Pricing\ApplicableGroupsType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getLanguages(), ($this->services['prestashop.core.form.choice_provider.currency_by_id'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_CurrencyByIdService.php')), ($this->services['prestashop.core.form.choice_provider.country_by_id'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_CountryByIdService.php')), ($this->services['prestashop.core.form.choice_provider.group_by_id'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_GroupByIdService.php')), ($this->services['prestashop.adapter.form.choice_provider.shop_name_by_id'] ?? ($this->services['prestashop.adapter.form.choice_provider.shop_name_by_id'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\ShopNameByIdChoiceProvider())), ($this->services['prestashop.adapter.data_provider.currency'] ?? $this->getPrestashop_Adapter_DataProvider_CurrencyService())->getDefaultCurrency()->symbol, ($this->services['prestashop.adapter.multistore_feature'] ?? $this->getPrestashop_Adapter_MultistoreFeatureService())->isUsed());
