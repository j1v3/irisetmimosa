<?php /* Smarty version Smarty-3.0.7, created on 2018-11-25 11:28:47
         compiled from "/var/www/irisetmimosa/modules/mondialrelay/tpl/bo-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4675305525bfa795fb533c1-06949321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecb87ce6602da20cd949d5b1f248c9a8ca251d4b' => 
    array (
      0 => '/var/www/irisetmimosa/modules/mondialrelay/tpl/bo-header.tpl',
      1 => 1331303298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4675305525bfa795fb533c1-06949321',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<link href="<?php echo $_smarty_tpl->getVariable('new_base_dir')->value;?>
css/style.css" rel="stylesheet" type="text/css" media="all" />

<?php if ($_smarty_tpl->getVariable('MR_overload_current_jquery')->value){?>
	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('MR_local_path')->value)."/tpl/jquery-overload.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php }?>

<script type="text/javascript">
	var PS_MR_ACCOUNT_SET = <?php if ($_smarty_tpl->getVariable('MR_account_set')->value){?>true<?php }else{ ?>false<?php }?>;
	var _PS_MR_MODULE_DIR_ = "<?php echo $_smarty_tpl->getVariable('new_base_dir')->value;?>
";
	var mrtoken = "<?php echo $_smarty_tpl->getVariable('MR_token')->value;?>
";
</script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('new_base_dir')->value;?>
js/mondialrelay.js"></script>



