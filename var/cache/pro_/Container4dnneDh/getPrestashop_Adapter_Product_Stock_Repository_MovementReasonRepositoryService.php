<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.stock.repository.movement_reason_repository' shared service.

return $this->services['prestashop.adapter.product.stock.repository.movement_reason_repository'] = new \PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\MovementReasonRepository(($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())));