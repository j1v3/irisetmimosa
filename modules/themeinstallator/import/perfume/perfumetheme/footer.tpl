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

		{if !$content_only}
		<!-- Right -->
				{if $page_name eq 'index'}<div id="right_column" class="column grid_2 omega">
					{$HOOK_RIGHT_COLUMN}
				</div>{/if}
				</div>
{if $page_name neq 'index'}<div id="right_column" class="column grid_2 omega">
					{$HOOK_RIGHT_COLUMN}
				</div>{/if}

			</div></div>
	{/if}</div></div>

<!-- Footer -->
			
		
	<p class="center clearBoth">&copy; Powered by prestashop.All rights reserved<br />Designed by<a href="http://www.loftytemplates.com" target="_blank"> <span> Lofty Templates</span></a></p>
	</body>
	
</html>
