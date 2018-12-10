<?php /* Smarty version Smarty-3.0.7, created on 2018-11-25 11:20:56
         compiled from "/var/www/irisetmimosa/themes/perfumetheme/modules/blocklanguages/blocklanguages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19333551375bfa7788c53dd0-69127383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ceacbb27a7f859ad8b1f2d354750f4d70d6ec804' => 
    array (
      0 => '/var/www/irisetmimosa/themes/perfumetheme/modules/blocklanguages/blocklanguages.tpl',
      1 => 1359673702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19333551375bfa7788c53dd0-69127383',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/irisetmimosa/tools/smarty/plugins/modifier.escape.php';
?>

<!-- Block languages module -->
<?php if (count($_smarty_tpl->getVariable('languages')->value)>1){?>
<div id="languages_block_top">
	<div id="countries">
<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('languages')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']==$_smarty_tpl->getVariable('lang_iso')->value){?>
		<p class="selected_language">
			
		</p>
	<?php }?>
<?php }} ?>
		<ul id="first-languages" class="countries_ul">
		<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('languages')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
			<li <?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']==$_smarty_tpl->getVariable('lang_iso')->value){?>class="selected_language"<?php }?>>
			<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']!=$_smarty_tpl->getVariable('lang_iso')->value){?>
				<?php $_smarty_tpl->tpl_vars['indice_lang'] = new Smarty_variable($_smarty_tpl->tpl_vars['language']->value['id_lang'], null, null);?>
				<?php if (isset($_smarty_tpl->getVariable('lang_rewrite_urls',null,true,false)->value[$_smarty_tpl->getVariable('indice_lang',null,true,false)->value])){?>
					<a href="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('lang_rewrite_urls')->value[$_smarty_tpl->getVariable('indice_lang')->value],'htmlall');?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
">
				<?php }else{ ?>
					<a href="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('link')->value->getLanguageLink($_smarty_tpl->tpl_vars['language']->value['id_lang']),'htmlall');?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
">

				<?php }?>
			<?php }?>
					<img src="<?php echo $_smarty_tpl->getVariable('img_lang_dir')->value;?>
<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
" width="16" height="11" />
			<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']!=$_smarty_tpl->getVariable('lang_iso')->value){?>
				</a>
			<?php }?>
			</li>
		<?php }} ?>
		</ul>
	</div>
</div>


<?php }?>
<!-- /Block languages module -->
