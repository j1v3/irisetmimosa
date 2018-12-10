<?php /* Smarty version Smarty-3.0.7, created on 2018-11-26 09:03:12
         compiled from "/var/www/irisetmimosa/themes/apparel/store_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7193657395bfba8c0c089b6-65099890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '597e7603b459d4646e253387451ff18a649e49e7' => 
    array (
      0 => '/var/www/irisetmimosa/themes/apparel/store_infos.tpl',
      1 => 1543211303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7193657395bfba8c0c089b6-65099890',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<br />
<br />
<span id="store_hours"><?php echo smartyTranslate(array('s'=>'Hours:'),$_smarty_tpl);?>
</span>
<table style="font-size: 9px;">
	<?php  $_smarty_tpl->tpl_vars['one_day'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('days_datas')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['one_day']->key => $_smarty_tpl->tpl_vars['one_day']->value){
?>
	<tr>
		<td style="width: 70px;"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['one_day']->value['day']),$_smarty_tpl);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['one_day']->value['hours'];?>
</td>
	</tr>
	<?php }} ?>
</table>
