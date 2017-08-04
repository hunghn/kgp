<?php /* Smarty version Smarty-3.1.7, created on 2016-07-17 03:35:26
         compiled from "/home/u636323536/public_html/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Install/Step1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:348135721578aeeee0591a1-00617678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e1b388ecc192ff937bf71a40bd1cd861a7044ad' => 
    array (
      0 => '/home/u636323536/public_html/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Install/Step1.tpl',
      1 => 1410782148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '348135721578aeeee0591a1-00617678',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_578aeeee06782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578aeeee06782')) {function content_578aeeee06782($_smarty_tpl) {?>

<div class="row-fluid main-container">
	<div class="inner-container">
		<div class="row-fluid">
			<div class="span10">
				<h4><?php echo vtranslate('LBL_WELCOME','Install');?>
</h4>
			</div>
			<div class="span2">
				<a href="https://wiki.vtiger.com/vtiger6/" target="_blank" class="pull-right">
					<img src="<?php echo vimage_path('help.png');?>
" alt="Help-Icon"/>
				</a>
			</div>
		</div>
		<hr>

		<form class="form-horizontal" name="step1" method="post" action="index.php">
			<input type=hidden name="module" value="Install" />
			<input type=hidden name="view" value="Index" />
			<input type=hidden name="mode" value="Step2" />
			<div class="row-fluid">
				<div class="span4 welcome-image">
					<img src="<?php echo vimage_path('wizard_screen.png');?>
" alt="Vtiger Logo"/>
				</div>
				<div class="span8">
					<div class="welcome-div">
						<h3><?php echo vtranslate('LBL_WELCOME_TO_VTIGER6_SETUP_WIZARD','Install');?>
</h3>
						<?php echo vtranslate('LBL_VTIGER6_SETUP_WIZARD_DESCRIPTION','Install');?>

					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="button-container">
					<input type="submit" class="btn btn-large btn-primary" value="<?php echo vtranslate('LBL_INSTALL_BUTTON','Install');?>
"/>
				</div>
			</div>
		</form>
	</div>
</div><?php }} ?>