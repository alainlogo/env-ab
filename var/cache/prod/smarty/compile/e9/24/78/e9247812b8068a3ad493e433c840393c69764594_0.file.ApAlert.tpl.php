<?php
/* Smarty version 3.1.39, created on 2022-01-26 16:48:34
  from '/homepages/15/d837691496/htdocs/env-test/modules/appagebuilder/views/templates/admin/ap_page_builder_shortcodes/ApAlert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f16d5262de82_80965827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9247812b8068a3ad493e433c840393c69764594' => 
    array (
      0 => '/homepages/15/d837691496/htdocs/env-test/modules/appagebuilder/views/templates/admin/ap_page_builder_shortcodes/ApAlert.tpl',
      1 => 1643128996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f16d5262de82_80965827 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_shortcodes\ApAlert -->
<div <?php if (!(isset($_smarty_tpl->tpl_vars['apInfo']->value))) {?>id="default_widget"<?php }?> class="widget-row clearfix<?php if ((isset($_smarty_tpl->tpl_vars['apInfo']->value))) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['apInfo']->value['name'],'html','UTF-8' ));
if ((isset($_smarty_tpl->tpl_vars['apInfo']->value['icon_class']))) {?> widget-icon<?php }
}
if ((isset($_smarty_tpl->tpl_vars['formAtts']->value))) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' ));
}
if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active']) {?> deactive<?php } else { ?> active<?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_desktop'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_desktop']) {?> deactive-desktop<?php } else { ?> active-desktop<?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_tablet'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_tablet']) {?> deactive-tablet<?php } else { ?> active-tablet<?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_mobile'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_mobile']) {?> deactive-mobile<?php } else { ?> active-mobile<?php }?> " <?php if ((isset($_smarty_tpl->tpl_vars['apInfo']->value))) {?>data-type="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['apInfo']->value['name'],'html','UTF-8' ));?>
"<?php }?>>
	<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value)) && (isset($_smarty_tpl->tpl_vars['formAtts']->value['form_id'])) && $_smarty_tpl->tpl_vars['formAtts']->value['form_id']) {?>
	<a id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' ));?>
" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' ));?>
"></a>
	<?php }?>
    <div class="widget-controll-top pull-right">
        <a href="javascript:void(0)" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drag to sort Widget','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="widget-action waction-drag label-tooltip"><i class="icon-move"></i> </a>
        <a href="javascript:void(0)" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disable or Enable Column','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="widget-action btn-status<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active']) {?> deactive<?php } else { ?> active<?php }?> label-tooltip"><i class="<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active']) {?>icon-remove<?php } else { ?>icon-ok<?php }?>"></i></a>
        <a href="javascript:void(0)" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit Widget','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="widget-action btn-edit label-tooltip" <?php if ((isset($_smarty_tpl->tpl_vars['apInfo']->value))) {?>data-type="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['apInfo']->value['name'],'html','UTF-8' ));?>
"<?php }?>><i class="icon-pencil"></i></a>
        <a href="javascript:void(0)" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate Widget','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="widget-action btn-duplicate label-tooltip"><i class="icon-paste"></i></a>
        <a href="javascript:void(0)" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete Column','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="widget-action btn-delete label-tooltip"><i class="icon-trash"></i></a>
    </div>
    <div class="devicesd-active widget-action widget-controll-top group-devicesd pull-right">
        <div class="btn-group <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_desktop'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_desktop']) {?> deactive-desktop<?php } else { ?> active-desktop<?php }?> label-tooltip" device="desktop" data-toggle="tooltip"
                    title="<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_desktop'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_desktop']) {?>Enable Widget On Desktop<?php } else { ?>Disable Widget On Desktop<?php }?>">
            <i class="icon-desktop leo-devicesd" ></i>
        </div>
        <div class="btn-group <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_tablet'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_tablet']) {?> deactive-tablet<?php } else { ?> active-tablet<?php }?> label-tooltip" device="tablet" data-toggle="tooltip"
        title="<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_tablet'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_tablet']) {?>Enable Widget On Tablet<?php } else { ?>Disable Widget On Tablet<?php }?>">
            <i class="icon-tablet leo-devicesd" ></i>
        </div>
        <div class="btn-group <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_mobile'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_mobile']) {?> deactive-mobile<?php } else { ?> active-mobile<?php }?> label-tooltip" device="mobile" data-toggle="tooltip"
        title="<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_mobile'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_mobile']) {?>Enable Widget On Mobile<?php } else { ?>Disable Widget On Mobile<?php }?>">
            <i class="icon-mobile leo-devicesd" ></i>
        </div>
    </div>
    <div class="widget-content">
        <img class="w-img" width="16" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['moduleDir']->value,'html','UTF-8' ));?>
appagebuilder/logo.gif" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Appolo Widget','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Appolo Widget','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
"/>
        <i class="icon w-icon<?php if ((isset($_smarty_tpl->tpl_vars['apInfo']->value)) && (isset($_smarty_tpl->tpl_vars['apInfo']->value['icon_class']))) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['apInfo']->value['icon_class'],'html','UTF-8' ));
}?>"></i>
        <a href="javascript:void(0);" title="" class="widget-title"><?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['title']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( rtrim($_smarty_tpl->tpl_vars['formAtts']->value['title']),'html','UTF-8' ));?>
 - <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['apInfo']->value))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['apInfo']->value['label'],'html','UTF-8' ));
}?></a>
    </div>
</div><?php }
}
