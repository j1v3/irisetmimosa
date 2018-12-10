{if $MENU != ''}
        </div>
<script src="{$this_path}js/selectnav.min.js" type="text/javascript"></script>
{literal}
	<script type="text/javascript">
		$(document).ready(function() {
			selectnav('resnav', {
				label: 'Menu',
				nested: true,
				indent: '-'
			});
		});
	</script>
{/literal}
<!-- Menu -->
	<div id="top-menu">
		<div id="left_res_menu"></div>
		<div id="right_res_menu"></div>
		<div>
			<ul id="nav" class="dropdown dropdown-horizontal">
				{$MENU}
			</ul>
		</div>
		<div class="clear"></div>
	</div>

	<!-- Reponsive menu -->
	<div id="responsive_menu">
		<div id="res_bg">
			<ul id="resnav">
				{$MENU}
			</ul>		
		</div>
	</div>
<!--/ Menu -->
{/if}
