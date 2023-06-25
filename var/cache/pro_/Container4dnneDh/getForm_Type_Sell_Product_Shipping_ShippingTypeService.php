<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.sell.product.shipping.shipping_type' shared service.

return $this->services['form.type.sell.product.shipping.shipping_type'] = new \PrestaShopBundle\Form\Admin\Sell\Product\Shipping\ShippingType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getLanguages(), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->currency->iso_code, ($this->services['prestashop.core.form.choice_provider.carrier_by_reference_id'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_CarrierByReferenceIdService.php')), ($this->services['prestashop.core.form.choice_provider.delivery_time_note_types_provider'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_DeliveryTimeNoteTypesProviderService.php')));
