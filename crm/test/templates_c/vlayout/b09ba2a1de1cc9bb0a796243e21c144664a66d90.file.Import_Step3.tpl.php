<?php /* Smarty version Smarty-3.1.7, created on 2016-07-17 13:49:32
         compiled from "/home/u636323536/public_html/crm/includes/runtime/../../layouts/vlayout/modules/Import/Import_Step3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2024543052578b8ceca85533-01334236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b09ba2a1de1cc9bb0a796243e21c144664a66d90' => 
    array (
      0 => '/home/u636323536/public_html/crm/includes/runtime/../../layouts/vlayout/modules/Import/Import_Step3.tpl',
      1 => 1468747891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2024543052578b8ceca85533-01334236',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'AUTO_MERGE_TYPES' => 0,
    '_MERGE_TYPE' => 0,
    '_MERGE_TYPE_LABEL' => 0,
    'AVAILABLE_FIELDS' => 0,
    '_FIELD_NAME' => 0,
    '_FIELD_INFO' => 0,
    'FOR_MODULE' => 0,
    'ENTITY_FIELDS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_578b8cecade1f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578b8cecade1f')) {function content_578b8cecade1f($_smarty_tpl) {?>

<table width="100%" cellspacing="0" cellpadding="2">
	<tr> 
		<td width="8%">
			<input type="checkbox" class="font-x-small" id="auto_merge" name="auto_merge" onclick="ImportJs.toogleMergeConfiguration();" />
			<strong><?php echo vtranslate('LBL_IMPORT_STEP_3',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</strong>
		</td>
		<td>
			<span class="big"><?php echo vtranslate('LBL_IMPORT_STEP_3_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span>
			<span class="font-x-small">( <?php echo vtranslate('LBL_IMPORT_STEP_3_DESCRIPTION_DETAILED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 )</span>
		</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
			<table width="100%" cellspacing="0" cellpadding="5" id="duplicates_merge_configuration" style="display:none;">
				<tr>
					<td>
						<span class="font-x-small"><?php echo vtranslate('LBL_SPECIFY_MERGE_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span>&nbsp;&nbsp;
						<select name="merge_type" id="merge_type" class="font-x-small">
							<?php  $_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['_MERGE_TYPE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['AUTO_MERGE_TYPES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->key => $_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->value){
$_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['_MERGE_TYPE']->value = $_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->key;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['_MERGE_TYPE']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<td class="font-x-small"><?php echo vtranslate('LBL_SELECT_MERGE_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td>
				</tr>
				<tr>
					<td>
						<table class="calDayHour" cellpadding="5" cellspacing="0">
							<tr>
								<td><b><?php echo vtranslate('LBL_AVAILABLE_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></td>
								<td></td>
								<td><b><?php echo vtranslate('LBL_SELECTED_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></td>
							</tr>
							<tr>
								<td>
									<select id="available_fields" multiple size="10" name="available_fields" class="txtBox" style="width: 100%">
										<?php  $_smarty_tpl->tpl_vars['_FIELD_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_FIELD_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['_FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['AVAILABLE_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_FIELD_INFO']->key => $_smarty_tpl->tpl_vars['_FIELD_INFO']->value){
$_smarty_tpl->tpl_vars['_FIELD_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['_FIELD_NAME']->value = $_smarty_tpl->tpl_vars['_FIELD_INFO']->key;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getFieldLabelKey(),$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
</option>
										<?php } ?>
									</select>
								</td>
								<td width="6%">
									<div align="center">
										<input type="button" name="Button" value="&nbsp;&rsaquo;&rsaquo;&nbsp;" onClick="ImportJs.copySelectedOptions('#available_fields', '#selected_merge_fields')" class="crmButton font-x-small importButton" /><br /><br />
										<input type="button" name="Button1" value="&nbsp;&lsaquo;&lsaquo;&nbsp;" onClick="ImportJs.removeSelectedOptions('#selected_merge_fields')" class="crmButton font-x-small importButton" /><br /><br />
									</div>
								</td>
								<td>
									<input type="hidden" id="merge_fields" size="10" name="merge_fields" value="" />
									<select id="selected_merge_fields" size="10" name="selected_merge_fields" multiple class="txtBox" style="width: 100%">
										<?php  $_smarty_tpl->tpl_vars['_FIELD_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_FIELD_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['_FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ENTITY_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_FIELD_INFO']->key => $_smarty_tpl->tpl_vars['_FIELD_INFO']->value){
$_smarty_tpl->tpl_vars['_FIELD_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['_FIELD_NAME']->value = $_smarty_tpl->tpl_vars['_FIELD_INFO']->key;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getFieldLabelKey(),$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
</option>
										<?php } ?>
									</select>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table><?php }} ?>