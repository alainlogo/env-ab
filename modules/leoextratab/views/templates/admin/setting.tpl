{*
* 2007-2019 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2019 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div id="leoextratab-group" data-url="{$baseurl}">
	<div class="panel panel-default">
		<div class="panel-heading">
			<i class="icon-cogs"></i>
			{l s='Config' mod='leoextratab'}
		</div>

		<div class="panel-content" id="leoextratab-setting">
			<ul class="nav nav-tabs leoextratab-tablist" role="tablist">
				<li class="nav-item active">
					<a class="nav-link" href="#fieldset_0" role="tab" data-toggle="tab">
						{l s='Settings General' mod='leoextratab'}
					</a>
				</li>
			</ul>
			<div class="tab-content">
				{$content nofilter}
			</div>
		</div>
	</div>
</div>

<style type="text/css">
	#leoextratab-setting .panel {
		display: none;
	}
	#leoextratab-setting .active {
		display: block;
	}
</style>