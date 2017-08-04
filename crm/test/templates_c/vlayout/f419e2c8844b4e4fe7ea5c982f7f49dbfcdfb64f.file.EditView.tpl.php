<?php /* Smarty version Smarty-3.1.7, created on 2016-07-17 10:10:31
         compiled from "/home/u636323536/public_html/crm/includes/runtime/../../layouts/vlayout/modules/Settings/Webforms/EditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:487264597578b5997b83f55-21378006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f419e2c8844b4e4fe7ea5c982f7f49dbfcdfb64f' => 
    array (
      0 => '/home/u636323536/public_html/crm/includes/runtime/../../layouts/vlayout/modules/Settings/Webforms/EditView.tpl',
      1 => 1468747897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '487264597578b5997b83f55-21378006',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_578b5997bb185',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578b5997bb185')) {function content_578b5997bb185($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditViewBlocks.tpl",'Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="targetFieldsTableContainer"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("FieldsEditView.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><br><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditViewActions.tpl",'Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="row-fluid" style="margin-bottom:150px;"></div><?php }} ?>