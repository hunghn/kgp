<?php /* Smarty version Smarty-3.1.7, created on 2016-07-17 10:06:49
         compiled from "/home/u636323536/public_html/crm/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1740002020578b58b9dd7d90-91199295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '476fd783e1fa64a3e7003d1dc6ffa7a157516efb' => 
    array (
      0 => '/home/u636323536/public_html/crm/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl',
      1 => 1468747891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1740002020578b58b9dd7d90-91199295',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_578b58b9dfb0a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578b58b9dfb0a')) {function content_578b58b9dfb0a($_smarty_tpl) {?>

<input type="hidden" name="refresh_timeout" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/><?php }} ?>