<?php
/*
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
*  @version  Release: $Revision: 14011 $
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_'))
	exit;

class BlockLogo extends Module
{
	public function __construct() {
		$this->name = 'blocklogo';
    		$this->version = 1.0;
    		$this->author = 'LeadingThemes';
    		$this->need_instance = 0;

		parent::__construct();

		$this->displayName = $this->l('Block Logo');
    		$this->description = $this->l('Places the logo into top hook');
	}

	public function install()
	{
		if (parent::install() == false OR !$this->registerHook('top')) {
			return false;
		}

		return true;
	}

	public function hookTop($params)
	{
		global $smarty, $cookie;

		$display = $this->display(__FILE__, 'blocklogo.tpl', $smartyCacheId);
		return $display;
	}

}
