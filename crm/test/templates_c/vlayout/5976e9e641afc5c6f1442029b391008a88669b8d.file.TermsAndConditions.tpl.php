<?php /* Smarty version Smarty-3.1.7, created on 2016-07-17 13:56:02
         compiled from "/home/u636323536/public_html/crm/includes/runtime/../../layouts/vlayout/modules/Settings/Vtiger/TermsAndConditions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1892517022578b8e7217ad47-19378452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5976e9e641afc5c6f1442029b391008a88669b8d' => 
    array (
      0 => '/home/u636323536/public_html/crm/includes/runtime/../../layouts/vlayout/modules/Settings/Vtiger/TermsAndConditions.tpl',
      1 => 1398442051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1892517022578b8e7217ad47-19378452',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'CONDITION_TEXT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_578b8e721e29b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578b8e721e29b')) {function content_578b8e721e29b($_smarty_tpl) {?>
<div class="container-fluid" id="TermsAndConditionsContainer"><div class="widget_header row-fluid"><div class="row-fluid"><h3><?php echo vtranslate('LBL_TERMS_AND_CONDITIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div></div><hr><div class="contents row-fluid"><br><textarea class="input-xxlarge TCContent textarea-autosize" rows="3" placeholder="<?php echo vtranslate('LBL_SPECIFY_TERMS_AND_CONDITIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" style="width:100%;" ><?php echo $_smarty_tpl->tpl_vars['CONDITION_TEXT']->value;?>
</textarea><div class="row-fluid textAlignCenter"><br><button class="btn btn-success saveTC hide"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div></div><?php }} ?>