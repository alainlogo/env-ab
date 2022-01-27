{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
 
<div id="_desktop_cart">
    <div class="blockcart cart-preview {if $cart.products_count > 0}active{else}inactive{/if}" data-refresh-url="{$refresh_url}">
        <div class="header">
            {if $cart.products_count > 0}
                <a rel="nofollow" href="{$cart_url}">
                {/if}
                <span class="mycart-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                <span class="cart-text">
                    <span class="text">{l s='My Cart' d='Shop.Theme.Checkout'}</span>
                    <span class="cart-qty">
                        <span class="cart-number">{$cart.products_count} </span>
                        <span class="cart-label">Item(s)</span>
                    </span>
                </span>
                {if $cart.products_count > 0}
                </a>
            {/if}
        </div>
    </div>
</div>
