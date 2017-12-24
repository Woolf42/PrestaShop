<?php

class Promotions extends Module
{
	private $_html = '';
	private $_postErrors = array();

	function __construct()
	{
		$this->name = 'promotions';
		$this->tab = 'Tools';
		$this->version = '0.9';

		parent::__construct();
		
		$this->displayName = $this->l('Produits en promotions');
		$this->description = $this->l('Produits en promotions sur la page d\'acceuil');
	}

	function install()
	{
		if (!Configuration::updateValue('PROMOTIONS_NBR', 8) OR !parent::install() OR !$this->registerHook('rightColumn'))
			return false;
		return true;
	}

	public function getContent()
	{
		$output = '<h2>'.$this->displayName.'</h2>';
		if (Tools::isSubmit('submitPromotions'))
		{
			$nbr = intval(Tools::getValue('nbr'));
			if (!$nbr OR $nbr <= 0 OR !Validate::isInt($nbr))
				$errors[] = $this->l('Invalid number of product');
			else
				Configuration::updateValue('PROMOTIONS_NBR', $nbr);
			if (isset($errors) AND sizeof($errors))
				$output .= $this->displayError(implode('<br />', $errors));
			else
				$output .= $this->displayConfirmation($this->l('Settings updated'));
		}
		return $output.$this->displayForm();
	}

	public function displayForm()
	{
		$output = '
		<form action="'.$_SERVER['REQUEST_URI'].'" method="post">
			<fieldset><legend><img src="'.$this->_path.'logo.gif" alt="" title="" />'.$this->l('Settings').'</legend>
				<p>'.$this->l('In order to add products to your homepage, just add them to the "home" category.').'</p><br />
				<label>'.$this->l('Number of product displayed').'</label>
				<div class="margin-form">
					<input type="text" size="5" name="nbr" value="'.Tools::getValue('nbr', Configuration::get('PROMOTIONS_NBR')).'" />
					<p class="clear">'.$this->l('The number of products displayed on homepage (default: 3)').'</p>
					
				</div>
				<center><input type="submit" name="submitPromotions" value="'.$this->l('Save').'" class="button" /></center>
			</fieldset>
		</form>';
		return $output;
	}

	function hookRightColumn($params)
	{
	global $smarty;
    global $cookie;
        $category = new Category(1);
        $nb = intval(Configuration::get('PROMOTIONS_NBR'));
        $products = Product::getPricesDrop(intval($cookie->id_lang), 0, $nb); 
		
		$smarty->assign(array(
			'allow_buy_when_out_of_stock' => Configuration::get('PS_ORDER_OUT_OF_STOCK', false),
			'max_quantity_to_allow_display' => Configuration::get('PS_LAST_QTIES'),
			'category' => $category,
			'products' => $products,
			'currency' => new Currency(intval($params['cart']->id_currency)),
			'lang' => Language::getIsoById(intval($params['cookie']->id_lang)),
			'productNumber' => sizeof($products),
			'homeSize' => Image::getSize('home')
		));
		return $this->display(__FILE__, 'promotions.tpl');
	}

}
