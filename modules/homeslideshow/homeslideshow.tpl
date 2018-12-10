{if $page_name == 'index'}
<!-- MODULE Home Slideshow -->
<script src="{$module_path}js/jquery.mobile.customized.min.js" type="text/javascript"></script>
<script src="{$module_path}js/camera.min.js" type="text/javascript"></script>
{literal}
<script type="text/javascript">
	jQuery(function(){
		jQuery('#camera_wrap').camera({
			height: '31.25%',
			thumbnails: false
		});
	});
</script>
{/literal}

<div class="fluid_container">
	<div class="camera_wrap camera_grey_skin" id="camera_wrap">
		{foreach from=$output key=key item=value}
		<div data-src="{$module_path}images/{$value.img}" {if $value.url != ''}data-link="{$value.url}"{/if}></div>
		{/foreach}
	</div>
	<div class="clear"></div>
</div>
<!-- /MODULE Home Slideshow -->
{/if}
