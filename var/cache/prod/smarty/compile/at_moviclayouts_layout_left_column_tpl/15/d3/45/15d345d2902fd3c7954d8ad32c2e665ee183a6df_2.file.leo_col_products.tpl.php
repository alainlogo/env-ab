<?php
/* Smarty version 3.1.39, created on 2022-01-27 09:55:19
  from '/homepages/15/d837691496/htdocs/env-test/themes/at_movic/templates/catalog/_partials/miniatures/leo_col_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f25df72dbed5_82249672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15d345d2902fd3c7954d8ad32c2e665ee183a6df' => 
    array (
      0 => '/homepages/15/d837691496/htdocs/env-test/themes/at_movic/templates/catalog/_partials/miniatures/leo_col_products.tpl',
      1 => 1643128996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/setting.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_61f25df72dbed5_82249672 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/homepages/15/d837691496/htdocs/env-test/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (!(isset($_smarty_tpl->tpl_vars['LISTING_GRID_MODE']->value)) || !(isset($_smarty_tpl->tpl_vars['LISTING_PRODUCT_COLUMN']->value)) || !(isset($_smarty_tpl->tpl_vars['LISTING_PRODUCT_COLUMN_MODULE']->value)) || !(isset($_smarty_tpl->tpl_vars['LISTING_PRODUCT_TABLET']->value)) || !(isset($_smarty_tpl->tpl_vars['LISTING_PRODUCT_SMALLDEVICE']->value)) || !(isset($_smarty_tpl->tpl_vars['LISTING_PRODUCT_EXTRASMALLDEVICE']->value)) || !(isset($_smarty_tpl->tpl_vars['LISTING_PRODUCT_MOBILE']->value))) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22704515961f25df72bf0c7_57127544', "setting");
?>

<?php }?>

<?php if (!(isset($_smarty_tpl->tpl_vars['productClassWidget']->value))) {?>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"pagebuilderConfig",'configName'=>"productClass"),$_smarty_tpl ) );
$_prefixVariable6 = ob_get_clean();
$_smarty_tpl->_assignInScope('productClassWidget', $_prefixVariable6);
}
if (!(isset($_smarty_tpl->tpl_vars['productProfileDefault']->value))) {?>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"pagebuilderConfig",'configName'=>"productKey"),$_smarty_tpl ) );
$_prefixVariable7 = ob_get_clean();
$_smarty_tpl->_assignInScope('productProfileDefault', $_prefixVariable7);
}?>

<?php if (((isset($_smarty_tpl->tpl_vars['page']->value['page_name'])) && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') || ((isset($_smarty_tpl->tpl_vars['leo_page']->value)) && $_smarty_tpl->tpl_vars['leo_page']->value == 'category')) {?>
    <?php $_smarty_tpl->_assignInScope('nbItemsPerLine', $_smarty_tpl->tpl_vars['LISTING_PRODUCT_COLUMN']->value);?>

    <?php if ($_smarty_tpl->tpl_vars['LISTING_PRODUCT_COLUMN']->value == "5") {?>       <?php $_smarty_tpl->_assignInScope('col_cat_product_xl', "col-xl-2-4");
} else {
$_smarty_tpl->_assignInScope('col_cat_product_xl', "col-xl-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_COLUMN']->value)));
}?>
    <?php if ($_smarty_tpl->tpl_vars['LISTING_PRODUCT_LARGEDEVICE']->value == "5") {?>  <?php $_smarty_tpl->_assignInScope('col_cat_product_lg', "col-lg-2-4");
} else {
$_smarty_tpl->_assignInScope('col_cat_product_lg', "col-lg-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_LARGEDEVICE']->value)));
}?>
    <?php $_smarty_tpl->_assignInScope('colValue', "col-sp-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_MOBILE']->value))." col-xs-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_EXTRASMALLDEVICE']->value))." col-sm-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_SMALLDEVICE']->value))." col-md-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_TABLET']->value))." ".((string)$_smarty_tpl->tpl_vars['col_cat_product_lg']->value)." ".((string)$_smarty_tpl->tpl_vars['col_cat_product_xl']->value) ,false ,32);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('nbItemsPerLine', $_smarty_tpl->tpl_vars['LISTING_PRODUCT_COLUMN_MODULE']->value);?>
    
    <?php if ($_smarty_tpl->tpl_vars['LISTING_PRODUCT_COLUMN_MODULE']->value == "5") {
$_smarty_tpl->_assignInScope('col_cat_product_xl', "col-xl-2-4");
} else {
$_smarty_tpl->_assignInScope('col_cat_product_xl', "col-xl-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_COLUMN_MODULE']->value)));
}?>
    <?php if ($_smarty_tpl->tpl_vars['LISTING_PRODUCT_LARGEDEVICE']->value == "5") {?>  <?php $_smarty_tpl->_assignInScope('col_cat_product_lg', "col-lg-2-4");
} else {
$_smarty_tpl->_assignInScope('col_cat_product_lg', "col-lg-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_LARGEDEVICE']->value)));
}?>
    
    <?php $_smarty_tpl->_assignInScope('colValue', "col-sp-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_MOBILE']->value))." col-xs-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_EXTRASMALLDEVICE']->value))." col-sm-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_SMALLDEVICE']->value))." col-md-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_TABLET']->value))." ".((string)$_smarty_tpl->tpl_vars['col_cat_product_lg']->value)." ".((string)$_smarty_tpl->tpl_vars['col_cat_product_xl']->value) ,false ,32);
}?>
        
<?php $_smarty_tpl->_assignInScope('nbItemsPerLineTablet', $_smarty_tpl->tpl_vars['LISTING_PRODUCT_TABLET']->value);
$_smarty_tpl->_assignInScope('nbItemsPerLineMobile', $_smarty_tpl->tpl_vars['LISTING_PRODUCT_EXTRASMALLDEVICE']->value);
$_smarty_tpl->_assignInScope('nbLi', count($_smarty_tpl->tpl_vars['products']->value));
echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'nbLines'),$_smarty_tpl);?>

<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLineTablet",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLineTablet'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'nbLinesTablet'),$_smarty_tpl);?>

<!-- Products list -->

<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"pagebuilderConfig",'configName'=>"categoryLayout"),$_smarty_tpl ) );
$_prefixVariable8 = ob_get_clean();
$_smarty_tpl->_assignInScope('categoryLayout', $_prefixVariable8);
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"pagebuilderConfig",'configName'=>"classCategoryLayout"),$_smarty_tpl ) );
$_prefixVariable9 = ob_get_clean();
$_smarty_tpl->_assignInScope('classCategoryLayout', $_prefixVariable9);?>

<div <?php if ((isset($_smarty_tpl->tpl_vars['id']->value)) && $_smarty_tpl->tpl_vars['id']->value) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="product_list <?php if ((isset($_smarty_tpl->tpl_vars['leo_page']->value)) && $_smarty_tpl->tpl_vars['leo_page']->value == 'category') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['LISTING_GRID_MODE']->value, ENT_QUOTES, 'UTF-8');
}?> <?php if ((isset($_smarty_tpl->tpl_vars['classCategoryLayout']->value)) && $_smarty_tpl->tpl_vars['classCategoryLayout']->value != '') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['classCategoryLayout']->value, ENT_QUOTES, 'UTF-8');?>
 <?php } elseif ((isset($_smarty_tpl->tpl_vars['productClassWidget']->value))) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productClassWidget']->value, ENT_QUOTES, 'UTF-8');
}?> ">
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'products', array (
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
            <?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>count($_smarty_tpl->tpl_vars['products']->value),'perLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'totModulo'),$_smarty_tpl);?>

            <?php echo smarty_function_math(array('equation'=>"(total%perLineT)",'total'=>count($_smarty_tpl->tpl_vars['products']->value),'perLineT'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'totModuloTablet'),$_smarty_tpl);?>

            <?php echo smarty_function_math(array('equation'=>"(total%perLineT)",'total'=>count($_smarty_tpl->tpl_vars['products']->value),'perLineT'=>$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value,'assign'=>'totModuloMobile'),$_smarty_tpl);?>

            <?php if ($_smarty_tpl->tpl_vars['totModulo']->value == 0) {
$_smarty_tpl->_assignInScope('totModulo', $_smarty_tpl->tpl_vars['nbItemsPerLine']->value);
}?>
            <?php if ($_smarty_tpl->tpl_vars['totModuloTablet']->value == 0) {
$_smarty_tpl->_assignInScope('totModuloTablet', $_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value);
}?>
            <?php if ($_smarty_tpl->tpl_vars['totModuloMobile']->value == 0) {
$_smarty_tpl->_assignInScope('totModuloMobile', $_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value);
}?>   
            <div class="ajax_block_product <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['colValue']->value, ENT_QUOTES, 'UTF-8');?>

                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value == 0) {?> last-in-line
                <?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value == 1) {?> first-in-line<?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null) > ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['total'] : null)-$_smarty_tpl->tpl_vars['totModulo']->value)) {?> last-line<?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value == 0) {?> last-item-of-tablet-line
                <?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value == 1) {?> first-item-of-tablet-line<?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value == 0) {?> last-item-of-mobile-line
                <?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value == 1) {?> first-item-of-mobile-line<?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null) > ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['total'] : null)-$_smarty_tpl->tpl_vars['totModuloMobile']->value)) {?> last-mobile-line<?php }?>
                ">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15045432461f25df72d8cc2_90152155', 'product_miniature');
?>

            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php echo '<script'; ?>
>
if (window.jQuery) {
    $(document).ready(function(){
        if (prestashop.page.page_name == 'category'){
            setDefaultListGrid();
        }
    });
}
<?php echo '</script'; ?>
><?php }
/* {block "setting"} */
class Block_22704515961f25df72bf0c7_57127544 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'setting' => 
  array (
    0 => 'Block_22704515961f25df72bf0c7_57127544',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:layouts/setting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block "setting"} */
/* {block 'product_miniature'} */
class Block_15045432461f25df72d8cc2_90152155 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_15045432461f25df72d8cc2_90152155',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['productProfileDefault']->value)) && $_smarty_tpl->tpl_vars['productProfileDefault']->value) {?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['categoryLayout']->value)) && $_smarty_tpl->tpl_vars['categoryLayout']->value != '') {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProfileProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'profile'=>$_smarty_tpl->tpl_vars['categoryLayout']->value),$_smarty_tpl ) );?>

                        <?php } else { ?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProfileProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'profile'=>$_smarty_tpl->tpl_vars['productProfileDefault']->value),$_smarty_tpl ) );?>

                        <?php }?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                    <?php }?>
                <?php
}
}
/* {/block 'product_miniature'} */
}
