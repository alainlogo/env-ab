<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.query_builder.order_message' shared service.

return $this->services['prestashop.core.grid.query_builder.order_message'] = new \PrestaShop\PrestaShop\Core\Grid\Query\OrderMessageQueryBuilder(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'ab_', ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->language->id, ${($_ = isset($this->services['prestashop.core.grid.query.filter.doctrine_filter_applicator']) ? $this->services['prestashop.core.grid.query.filter.doctrine_filter_applicator'] : ($this->services['prestashop.core.grid.query.filter.doctrine_filter_applicator'] = new \PrestaShop\PrestaShop\Core\Grid\Query\Filter\DoctrineFilterApplicator())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.query.doctrine_search_criteria_applicator']) ? $this->services['prestashop.core.query.doctrine_search_criteria_applicator'] : ($this->services['prestashop.core.query.doctrine_search_criteria_applicator'] = new \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicator())) && false ?: '_'});
