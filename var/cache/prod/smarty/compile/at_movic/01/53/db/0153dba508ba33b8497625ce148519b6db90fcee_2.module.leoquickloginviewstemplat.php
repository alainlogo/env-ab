<?php
/* Smarty version 3.1.39, created on 2022-01-27 01:39:54
  from 'module:leoquickloginviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f1e9da41e006_67150860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0153dba508ba33b8497625ce148519b6db90fcee' => 
    array (
      0 => 'module:leoquickloginviewstemplat',
      1 => 1643128996,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f1e9da41e006_67150860 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal leo-quicklogin-modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo $_smarty_tpl->tpl_vars['html_form']->value;?>
            </div> 
            <div class="modal-footer"></div>
        </div>
    </div>
</div><?php }
}
