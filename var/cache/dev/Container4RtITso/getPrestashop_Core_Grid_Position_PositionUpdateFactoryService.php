<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.position.position_update_factory' shared service.

return $this->services['prestashop.core.grid.position.position_update_factory'] = new \PrestaShop\PrestaShop\Core\Grid\Position\PositionUpdateFactory('positions', 'rowId', 'oldPosition', 'newPosition', 'parentId');
