<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.specific_price.repository.specific_price_repository' shared service.

return $this->services['prestashop.adapter.product.specific_price.repository.specific_price_repository'] = new \PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Repository\SpecificPriceRepository(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'ab_', ${($_ = isset($this->services['prestashop.adapter.product.specific_price.validate.specific_price_validator']) ? $this->services['prestashop.adapter.product.specific_price.validate.specific_price_validator'] : ($this->services['prestashop.adapter.product.specific_price.validate.specific_price_validator'] = new \PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Validate\SpecificPriceValidator())) && false ?: '_'});
