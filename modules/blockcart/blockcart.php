<?php

/*Copyright 2010 maofree  email: msecco@gmx.com

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 3, as 
published by the Free Software Foundation.

This file can't be removed. This module can't be sold.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.

*/

if (!defined('_CAN_LOAD_FILES_'))
	exit;

class BlockCart extends Module
{
	public function __construct()
	{
		$this->name = 'blockcart';
		$this->tab = 'others';
		$this->version = '1.2';
		$this->author = 'maofree';
		$this->need_instance = 0;

		parent::__construct();

		$this->displayName = $this->l('Cart block with images');
		$this->description = $this->l('Adds a block containing the customer\'s shopping cart');
	}
	
	public function smartyAssigns(&$smarty, &$params)
	{
		global $errors, $cookie;

		// Set currency
		if (!(int)($params['cart']->id_currency))
			$currency = new Currency((int)$params['cookie']->id_currency);
		else
			$currency = new Currency((int)$params['cart']->id_currency);
		if (!Validate::isLoadedObject($currency))
			$currency = new Currency((int)(Configuration::get('PS_CURRENCY_DEFAULT')));

		if ($params['cart']->id_customer)
		{
			$customer = new Customer((int)$params['cart']->id_customer);
			$taxCalculationMethod = Group::getPriceDisplayMethod((int)$customer->id_default_group);
		}
		else
			$taxCalculationMethod = Group::getDefaultPriceDisplayMethod();
		
		$useTax = !($taxCalculationMethod == PS_TAX_EXC);

		$products = $params['cart']->getProducts(true);
		$nbTotalProducts = 0;
		foreach ($products AS $product)
			$nbTotalProducts += (int)$product['cart_quantity'];

		$wrappingCost = (float)($params['cart']->getOrderTotal($useTax, Cart::ONLY_WRAPPING));
		$totalToPay = $params['cart']->getOrderTotal($useTax);
		
		if ($useTax AND Configuration::get('PS_TAX_DISPLAY') == 1)
		{
			$totalToPayWithoutTaxes = $params['cart']->getOrderTotal(false);
			$smarty->assign('tax_cost', Tools::displayPrice($totalToPay - $totalToPayWithoutTaxes, $currency));
		}
		
		$smarty->assign(array(
			'products' => $products,
			'customizedDatas' => Product::getAllCustomizedDatas((int)($params['cart']->id)),
			'CUSTOMIZE_FILE' => _CUSTOMIZE_FILE_,
			'CUSTOMIZE_TEXTFIELD' => _CUSTOMIZE_TEXTFIELD_,
			'discounts' => $params['cart']->getDiscounts(false, Tools::isSubmit('id_product')),
			'nb_total_products' => (int)($nbTotalProducts),
			'shipping_cost' => Tools::displayPrice($params['cart']->getOrderTotal($useTax, Cart::ONLY_SHIPPING), $currency),
			'show_wrapping' => $wrappingCost > 0 ? true : false,
			'show_tax' => (int)(Configuration::get('PS_TAX_DISPLAY') == 1 && $smarty->getConfigVars('use_taxes')),
			'wrapping_cost' => Tools::displayPrice($wrappingCost, $currency),
			'product_total' => Tools::displayPrice($params['cart']->getOrderTotal($useTax, Cart::BOTH_WITHOUT_SHIPPING), $currency),
			'total' => Tools::displayPrice($totalToPay, $currency),
			'id_carrier' => (int)($params['cart']->id_carrier),
			'order_process' => Configuration::get('PS_ORDER_PROCESS_TYPE') ? 'order-opc' : 'order',
			'att_cus' => (int)(Configuration::get('PS_BLOCK_CART_ATT_CUS')) == 1 ? true : false,			
			'ajax_allowed' => (int)(Configuration::get('PS_BLOCK_CART_AJAX')) == 1 ? true : false
		));
		if (sizeof($errors))
			$smarty->assign('errors', $errors);
		if(isset($cookie->ajax_blockcart_display))
			$smarty->assign('colapseExpandStatus', $cookie->ajax_blockcart_display);
	}

	public function getContent()
	{
		$output = '<style type="text/css">.margin-form { padding: 0 0 1em 300px; } label { width: 250px }</style>';		
		$output .= '<h2>'.$this->displayName.'</h2>';
		if (Tools::isSubmit('submitBlockCart'))
		{
			$ajax = Tools::getValue('ajax');
			$attcus = Tools::getValue('attcus');			
			if ($ajax != 0 AND $ajax != 1)
				$output .= '<div class="alert error">'.$this->l('Ajax : Invalid choice.').'</div>';
			else
				Configuration::updateValue('PS_BLOCK_CART_AJAX', (int)($ajax));
			if ($attcus != 0 AND $attcus != 1)
				$output .= '<div class="alert error">'.$this->l('Attributes and Customizations : Invalid choice.').'</div>';
			else
				Configuration::updateValue('PS_BLOCK_CART_ATT_CUS', (int)($attcus));				
			$output .= '<div class="conf confirm"><img src="../img/admin/ok.gif" alt="'.$this->l('Confirmation').'" />'.$this->l('Settings updated').'</div>';
		}
		return $output.$this->displayForm();
	}

	public function displayForm()
	{
		return '
		<fieldset>
			<legend><img src="'.$this->_path.'/logo.gif" alt="maofree\'s module" title="maofree\'s module" />maofree</legend>		
				<a href="http://www.maofree-developer.com" target="_blank"><img src="'._MODULE_DIR_.$this->name.'/img/donate.png" alt="maofree\'s website" title="'.$this->l('Do you need some help? (click here)').'" /></a>
			<div style="float:right;width:70%;">
				<h3 style="color:lightCoral;">'.$this->l('If you like my job, you could support me with a donation').'.</h3>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="MEF3Z7XDHQZF8">
					<input type="image" src="https://www.paypal.com/en_GB/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="Paypal" style="margin-top:20px;">
					<img alt="" border="0" src="https://www.paypal.com/it_IT/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
		</fieldset>
		
		<form action="'.$_SERVER['REQUEST_URI'].'" method="post">
			<fieldset>
				<legend><img src="'.$this->_path.'logo.gif" alt="" title="" />'.$this->l('Settings').'</legend>
				
				<label>'.$this->l('Ajax cart').'</label>
				<div class="margin-form">
					<input type="radio" name="ajax" id="ajax_on" value="1" '.(Tools::getValue('ajax', Configuration::get('PS_BLOCK_CART_AJAX')) ? 'checked="checked" ' : '').'/>
					<label class="t" for="ajax_on"><img src="../img/admin/enabled.gif" alt="'.$this->l('Enabled').'" title="'.$this->l('Enabled').'" /></label>
					<input type="radio" name="ajax" id="ajax_off" value="0" '.(!Tools::getValue('ajax', Configuration::get('PS_BLOCK_CART_AJAX')) ? 'checked="checked" ' : '').'/>
					<label class="t" for="ajax_off"><img src="../img/admin/disabled.gif" alt="'.$this->l('Disabled').'" title="'.$this->l('Disabled').'" /></label>
					<p class="clear">'.$this->l('Activate AJAX mode for cart (compatible with the default theme)').'</p>
				</div>
				
				<label>'.$this->l('Attributes and Customizations').'</label>
				<div class="margin-form">
					<input type="radio" name="attcus" id="attcus_on" value="1" '.(Tools::getValue('attcus', Configuration::get('PS_BLOCK_CART_ATT_CUS')) ? 'checked="checked" ' : '').'/>
					<label class="t" for="attcus_on"><img src="../img/admin/enabled.gif" alt="'.$this->l('Enabled').'" title="'.$this->l('Enabled').'" /></label>
					<input type="radio" name="attcus" id="attcus_off" value="0" '.(!Tools::getValue('attcus', Configuration::get('PS_BLOCK_CART_ATT_CUS')) ? 'checked="checked" ' : '').'/>
					<label class="t" for="attcus_off"><img src="../img/admin/disabled.gif" alt="'.$this->l('Disabled').'" title="'.$this->l('Disabled').'" /></label>
					<p class="clear">'.$this->l('Add Attributes and Customizations in cart block').'</p>
				</div>				
				
				<div class="margin-form clear"><input type="submit" name="submitBlockCart" value="'.$this->l('Save').'" class="button" /></div>
			</fieldset>
		</form>';
	}

	public function install()
	{
		if
		(
			parent::install() == false
			OR $this->registerHook('rightColumn') == false
			OR $this->registerHook('header') == false
			OR Configuration::updateValue('PS_BLOCK_CART_AJAX', 1) == false
			OR Configuration::updateValue('PS_BLOCK_CART_ATT_CUS', 1) == false			
		)
			return false;
		return true;
	}

	public function hookRightColumn($params)
	{
		if (Configuration::get('PS_CATALOG_MODE'))
			return ;
					
		global $smarty;

		$smarty->assign('order_page', strpos($_SERVER['PHP_SELF'], 'order') !== false);
		$this->smartyAssigns($smarty, $params);

		return $this->display(__FILE__, 'blockcart.tpl');
	}

	public function hookLeftColumn($params)
	{
		return $this->hookRightColumn($params);
	}

	public function hookAjaxCall($params)
	{
		if (Configuration::get('PS_CATALOG_MODE'))
			return ;		
		
		global $smarty;
		$smarty->assign('url_theme_img', _THEME_IMG_DIR_);
		$this->smartyAssigns($smarty, $params);
		$res = $this->display(__FILE__, 'blockcart-json.tpl');
		return $res;
	}
	
	public function hookHeader()
	{
		if (Configuration::get('PS_CATALOG_MODE'))
			return ;		
		
		Tools::addCSS(($this->_path).'blockcart.css', 'all');
		Tools::addCSS(($this->_path).'css/myblockcart.css', 'all');		
		if ((int)(Configuration::get('PS_BLOCK_CART_AJAX')))
			Tools::addJS(($this->_path).'ajax-cart.js');
	}
}