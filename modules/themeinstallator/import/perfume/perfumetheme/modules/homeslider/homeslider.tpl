{*
* 2007-2013 PrestaShop
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
*  @copyright  2007-2013 PrestaShop SA
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<!-- Module HomeSlider -->
{if isset($homeslider)}
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
{/if}
<div class="flexslider">
         
{if isset($homeslider_slides)}
 <ul class="slides">
{foreach from=$homeslider_slides item=slide}
	{if $slide.active}
		<li>
			<a href="{$slide.url|escape:'htmlall':'UTF-8'}" title="{$slide.description|escape:'htmlall':'UTF-8'}">
			<img src="{$smarty.const._MODULE_DIR_}/homeslider/images/{$slide.image|escape:'htmlall':'UTF-8'}" alt="{$slide.legend|escape:'htmlall':'UTF-8'}" height="{$homeslider.height|intval}" width="{$homeslider.width|intval}" />
			</a>
		</li>
	{/if}
{/foreach}
</ul>
{/if}</div>
<!-- /Module HomeSlider -->
