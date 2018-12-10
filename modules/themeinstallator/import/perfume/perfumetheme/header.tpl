{*

* 2007-2012 PrestaShop

*

* NOTICE OF LICENSE

*

* This source file is subject to the Academic Free License (AFL 3.0)

* that is bundled with this package in the file LICENSE.txt.

* It is also available through the world-wide-web at this URL:

* http://opensource.org/licenses/afl-3.0.php

* If you did not receive a copy of the license and are unable to

* obtain it through the world-wide-web, please send an email

* to license@prestashop.com so we can send you a copy immediately.

*

* DISCLAIMER

*

* Do not edit or add to this file if you wish to upgrade PrestaShop to newer

* versions in the future. If you wish to customize PrestaShop for your

* needs please refer to http://www.prestashop.com for more information.

*

*  @author PrestaShop SA <contact@prestashop.com>

*  @copyright  2007-2012 PrestaShop SA

*  @version  Release: $Revision: 6594 $

*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)

*  International Registered Trademark & Property of PrestaShop SA

*}



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$lang_iso}">

	<head>

		<title>{$meta_title|escape:'htmlall':'UTF-8'}</title>

{if isset($meta_description) AND $meta_description}

		<meta name="description" content="{$meta_description|escape:html:'UTF-8'}" />

{/if}

{if isset($meta_keywords) AND $meta_keywords}

		<meta name="keywords" content="{$meta_keywords|escape:html:'UTF-8'}" />

{/if}

		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />

		<meta http-equiv="content-language" content="{$meta_language}" />

		<meta name="generator" content="PrestaShop" />

		<meta name="robots" content="{if isset($nobots)}no{/if}index,{if isset($nofollow) && $nofollow}no{/if}follow" />

		<link rel="icon" type="image/vnd.microsoft.icon" href="{$favicon_url}?{$img_update_time}" />

		<link rel="shortcut icon" type="image/x-icon" href="{$favicon_url}?{$img_update_time}" />

		<script type="text/javascript">

			var baseDir = '{$content_dir}';

			var baseUri = '{$base_uri}';

			var static_token = '{$static_token}';

			var token = '{$token}';

			var priceDisplayPrecision = {$priceDisplayPrecision*$currency->decimals};

			var priceDisplayMethod = {$priceDisplay};

			var roundMode = {$roundMode};

		</script>

{if isset($css_files)}

	{foreach from=$css_files key=css_uri item=media}

	<link href="{$css_uri}" rel="stylesheet" type="text/css" media="{$media}" />

	{/foreach}

{/if}

{if isset($js_files)}

	{foreach from=$js_files item=js_uri}

	<script type="text/javascript" src="{$js_uri}"></script>

	{/foreach}

{/if}

		{$HOOK_HEADER}

	</head>

	

	<body {if isset($page_name)}id="{$page_name|escape:'htmlall':'UTF-8'}"{/if} class="{if $hide_left_column}hide-left-column{/if} {if $hide_right_column}hide-right-column{/if}">

	{if !$content_only}

		{if isset($restricted_country_mode) && $restricted_country_mode}

		<div id="restricted-country">

			<p>{l s='You cannot place a new order from your country.'} <span class="bold">{$geolocation_country}</span></p>

		</div>

		{/if}

		<div id="page" class="container_9 clearfix">





						<!-- Header -->
			<div id="header" class="grid_9 alpha omega">
				<a id="header_logo" href="{$base_dir}" title="{$shop_name|escape:'htmlall':'UTF-8'}">
					<img class="logo" src="{$logo_url}" alt="{$shop_name|escape:'htmlall':'UTF-8'}" {if $logo_image_width}width="{$logo_image_width}"{/if} {if $logo_image_height}height="{$logo_image_height}" {/if} />
				</a>
				<div id="header_right" class="grid_6 omega clearfix">
					{$HOOK_TOP}
				</div></div>
				
				<div id="menu" class="menu_content clearfix">
				<div class="menu_id_content clearfix">
				<ul>
				<li class="menu_list" ><a href="{$base_dir}" {if $page_name eq 'index'}class="choosing"{/if}><span>Home</span></a></li>
				<li class="menu_list"><a href="{$base_dir}?controller=sitemap"><span>Site maps</span></a></li>
				<li class="menu_list"><a href="{$base_dir}?controller=contact"><span>Contact us</span></a></li>
				<li class="menu_list"><a href="{$base_dir}" ><span>Book mark</span></a></li>
				<li class="menu_acc"><a href="{$base_dir}"><span><p id="your_account">
		<a href="{$link->getPageLink('my-account', true)}" title="{l s='Your Account' mod='blockuserinfo'}">{l s='Your Account' mod='blockuserinfo'}</a>
		
	</p></span></a></li>
	<li class="menu_cart"> <a href="{$base_dir}" ><span><div id="header_user">
	<ul id="header_nav">
		{if !$PS_CATALOG_MODE}
		<li id="shopping_cart">
			<a href="?controller=order" title="{l s='Your Shopping Cart' mod='blockuserinfo'}">{l s='Cart:' mod='blockuserinfo'}
			<span class="ajax_cart_quantity{if $cart_qties == 0} hidden{/if}">{$cart_qties}</span>
			<span class="ajax_cart_product_txt{if $cart_qties != 1} hidden{/if}">{l s='product' mod='blockuserinfo'}</span>
			<span class="ajax_cart_product_txt_s{if $cart_qties < 2} hidden{/if}">{l s='products' mod='blockuserinfo'}</span>
			<span class="ajax_cart_total{if $cart_qties == 0} hidden{/if}">
				{if $cart_qties > 0}
					{if $priceDisplay == 1}
						{assign var='blockuser_cart_flag' value='Cart::BOTH_WITHOUT_SHIPPING'|constant}
						{convertPrice price=$cart->getOrderTotal(false, $blockuser_cart_flag)}
					{else}
						{assign var='blockuser_cart_flag' value='Cart::BOTH_WITHOUT_SHIPPING'|constant}
						{convertPrice price=$cart->getOrderTotal(true, $blockuser_cart_flag)}
					{/if}
				{/if}
			</span>
			<span class="ajax_cart_no_product{if $cart_qties > 0} hidden{/if}">{l s='(empty)' mod='blockuserinfo'}</span>
			</a>
		</li>
		{/if}
		
		
	</ul>
	
</div></span></a></li>

<li class="menu_login"><a href="{$base_dir}"><span><p id="header_user_info">
		{if $logged}
			<a href="{$link->getPageLink('my-account', true)}" class="account"><span>{$cookie->customer_firstname} {$cookie->customer_lastname}</span></a>
			<a href="{$link->getPageLink('index', true, NULL, "mylogout")}" title="{l s='Log me out' mod='blockuserinfo'}" class="logout"></a>
		{else}
			<a href="{$link->getPageLink('my-account', true)}" class="login">{l s='Log in' mod='blockuserinfo'}</a>
		{/if}
	</p></span></a></li>




</ul> </div></div>
{if $page_name eq 'index'}	
<div class="clsSlider" style="display:none">
				<div class="flexslider">
          <ul class="slides">
            <li>
  	    	    <img src="{$img_dir}/slider1.png" />
  	    		</li>
				<li> <img src="{$img_dir}/slider2.png" /></li>
				<li> <img src="{$img_dir}/slider3.png" /></li>
				<li> <img src="{$img_dir}/slider4.png" /></li>
				<li> <img src="{$img_dir}/slider5.png" /></li>
				<li> <img src="{$img_dir}/slider6.png" /></li>
				<li> <img src="{$img_dir}/slider7.png" /></li>
				</ul></div>	
				
				<!-- FlexSlider -->
  <script defer src="{$js_dir}jquery.flexslider.js"></script>
  <link rel="stylesheet"  href="{$css_dir}flexslider.css" type="text/css" media="screen" />
  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "fade",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
  
				</div>{/if}



			<div id="columns" class="grid_9 alpha omega clearfix">

				<!-- Left -->

				<div id="left_column" class="column grid_2 alpha">

					{$HOOK_LEFT_COLUMN}

				</div>



				<!-- Center -->

				<div id="center_column" class=" grid_5 {if $page_name eq 'index'}clsHomePage{/if}">

	{/if}

