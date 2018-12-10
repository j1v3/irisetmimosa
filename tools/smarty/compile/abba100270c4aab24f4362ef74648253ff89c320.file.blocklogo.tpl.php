<?php /* Smarty version Smarty-3.0.7, created on 2018-11-26 06:49:57
         compiled from "/var/www/irisetmimosa/modules/blocklogo/blocklogo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20620501545bfb898582a9d2-60392755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abba100270c4aab24f4362ef74648253ff89c320' => 
    array (
      0 => '/var/www/irisetmimosa/modules/blocklogo/blocklogo.tpl',
      1 => 1543211360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20620501545bfb898582a9d2-60392755',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/irisetmimosa/tools/smarty/plugins/modifier.escape.php';
?><a id="header_logo" href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('index.php');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('shop_name')->value,'htmlall','UTF-8');?>
">
							<img class="logo" src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
logo.png?<?php echo $_smarty_tpl->getVariable('img_update_time')->value;?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('shop_name')->value,'htmlall','UTF-8');?>
" <?php if ($_smarty_tpl->getVariable('logo_image_width')->value){?>width="<?php echo $_smarty_tpl->getVariable('logo_image_width')->value;?>
"<?php }?> <?php if ($_smarty_tpl->getVariable('logo_image_height')->value){?>height="<?php echo $_smarty_tpl->getVariable('logo_image_height')->value;?>
" <?php }?> />
						</a>
