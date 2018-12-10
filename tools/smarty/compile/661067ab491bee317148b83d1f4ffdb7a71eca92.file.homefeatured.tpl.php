<?php /* Smarty version Smarty-3.0.7, created on 2018-11-26 06:49:57
         compiled from "/var/www/irisetmimosa/themes/apparel/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2596703165bfb8985cdf964-75258564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '661067ab491bee317148b83d1f4ffdb7a71eca92' => 
    array (
      0 => '/var/www/irisetmimosa/themes/apparel/modules/homefeatured/homefeatured.tpl',
      1 => 1543211303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2596703165bfb8985cdf964-75258564',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_math')) include '/var/www/irisetmimosa/tools/smarty/plugins/function.math.php';
if (!is_callable('smarty_modifier_escape')) include '/var/www/irisetmimosa/tools/smarty/plugins/modifier.escape.php';
?>

<!-- MODULE Home Featured Products -->
<div id="featured-products_block_center" class="block products_block">
	<h4><?php echo smartyTranslate(array('s'=>'Featured products','mod'=>'homefeatured'),$_smarty_tpl);?>
</h4>
	<?php if (isset($_smarty_tpl->getVariable('products',null,true,false)->value)&&$_smarty_tpl->getVariable('products')->value){?>
		<div class="block_content">
			<?php $_smarty_tpl->tpl_vars['liHeight'] = new Smarty_variable(342, null, null);?>
			<?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(4, null, null);?>
			<?php $_smarty_tpl->tpl_vars['nbLi'] = new Smarty_variable(count($_smarty_tpl->getVariable('products')->value), null, null);?>
			<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->getVariable('nbLi')->value,'nbItemsPerLine'=>$_smarty_tpl->getVariable('nbItemsPerLine')->value,'assign'=>'nbLines'),$_smarty_tpl);?>

			<?php echo smarty_function_math(array('equation'=>"nbLines*liHeight",'nbLines'=>ceil($_smarty_tpl->getVariable('nbLines')->value),'liHeight'=>$_smarty_tpl->getVariable('liHeight')->value,'assign'=>'ulHeight'),$_smarty_tpl);?>

			<ul>

			<?php $_smarty_tpl->tpl_vars['broj'] = new Smarty_variable(0, null, null);?>

			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['total'] = $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['iteration']=0;
if ($_smarty_tpl->tpl_vars['product']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
				<?php $_smarty_tpl->tpl_vars['brojcek'] = new Smarty_variable($_smarty_tpl->getVariable('broj')->value%4, null, null);?>
				<li class="ajax_block_product <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['last']){?>last_item<?php }else{ ?>item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['iteration']%$_smarty_tpl->getVariable('nbItemsPerLine')->value==0){?>last_item_of_line<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['iteration']%$_smarty_tpl->getVariable('nbItemsPerLine')->value==1){?>clear<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['total']-($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['total']%$_smarty_tpl->getVariable('nbItemsPerLine')->value))){?>last_line<?php }?> <?php if ($_smarty_tpl->getVariable('brojcek')->value==0){?>pfirst<?php }elseif($_smarty_tpl->getVariable('brojcek')->value==3){?>plast<?php }?>">
					<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8');?>
" class="product_image"><img src="<?php echo $_smarty_tpl->getVariable('link')->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home');?>
" height="<?php echo $_smarty_tpl->getVariable('homeSize')->value['height'];?>
" width="<?php echo $_smarty_tpl->getVariable('homeSize')->value['width'];?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8');?>
" /></a>
					<h5><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],32,'...'),'htmlall','UTF-8');?>
"><?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],27,'...'),'htmlall','UTF-8');?>
</a></h5>
					<div>
						<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->getVariable('restricted_country_mode',null,true,false)->value)&&!$_smarty_tpl->getVariable('PS_CATALOG_MODE')->value){?><p class="price_container"><span class="price"><?php if (!$_smarty_tpl->getVariable('priceDisplay')->value){?><?php echo Product::convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php }else{ ?><?php echo Product::convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?></span></p><?php }else{ ?><div style="height:21px;"></div><?php }?>
						<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo smartyTranslate(array('s'=>'View','mod'=>'homefeatured'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'View','mod'=>'homefeatured'),$_smarty_tpl);?>
</a>
					</div>
				</li>
				<?php $_smarty_tpl->tpl_vars['broj'] = new Smarty_variable($_smarty_tpl->getVariable('broj')->value+1, null, null);?>
			<?php }} ?>
			</ul>
			<div class="clear"></div>
		</div>
	<?php }else{ ?>
		<p><?php echo smartyTranslate(array('s'=>'No featured products','mod'=>'homefeatured'),$_smarty_tpl);?>
</p>
	<?php }?>
</div>
<!-- /MODULE Home Featured Products -->
