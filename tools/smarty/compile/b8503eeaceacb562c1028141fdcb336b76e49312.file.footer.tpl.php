<?php /* Smarty version Smarty-3.0.7, created on 2018-11-25 10:22:43
         compiled from "/var/www/irisetmimosa/themes/prestashop/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7632848295bfa69e3563b39-21881717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8503eeaceacb562c1028141fdcb336b76e49312' => 
    array (
      0 => '/var/www/irisetmimosa/themes/prestashop/footer.tpl',
      1 => 1331302370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7632848295bfa69e3563b39-21881717',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


		<?php if (!$_smarty_tpl->getVariable('content_only')->value){?>
				</div>

<!-- Right -->
				<div id="right_column" class="column">
					<?php echo $_smarty_tpl->getVariable('HOOK_RIGHT_COLUMN')->value;?>

				</div>
			</div>

<!-- Footer -->
			<div id="footer"><?php echo $_smarty_tpl->getVariable('HOOK_FOOTER')->value;?>
</div>
		</div>
	<?php }?>
	</body>
</html>
