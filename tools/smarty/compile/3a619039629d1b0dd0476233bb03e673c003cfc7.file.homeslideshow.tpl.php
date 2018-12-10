<?php /* Smarty version Smarty-3.0.7, created on 2018-11-26 06:49:57
         compiled from "/var/www/irisetmimosa/modules/homeslideshow/homeslideshow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6770632175bfb8985c778a8-96749411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a619039629d1b0dd0476233bb03e673c003cfc7' => 
    array (
      0 => '/var/www/irisetmimosa/modules/homeslideshow/homeslideshow.tpl',
      1 => 1543211360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6770632175bfb8985c778a8-96749411',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('page_name')->value=='index'){?>
<!-- MODULE Home Slideshow -->
<script src="<?php echo $_smarty_tpl->getVariable('module_path')->value;?>
js/jquery.mobile.customized.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('module_path')->value;?>
js/camera.min.js" type="text/javascript"></script>

<script type="text/javascript">
	jQuery(function(){
		jQuery('#camera_wrap').camera({
			height: '31.25%',
			thumbnails: false
		});
	});
</script>


<div class="fluid_container">
	<div class="camera_wrap camera_grey_skin" id="camera_wrap">
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('output')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<div data-src="<?php echo $_smarty_tpl->getVariable('module_path')->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['value']->value['img'];?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value['url']!=''){?>data-link="<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
"<?php }?>></div>
		<?php }} ?>
	</div>
	<div class="clear"></div>
</div>
<!-- /MODULE Home Slideshow -->
<?php }?>
