<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.attribute.repository.attribute_repository' shared service.

return $this->services['prestashop.adapter.attribute.repository.attribute_repository'] = new \PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'ab_');
