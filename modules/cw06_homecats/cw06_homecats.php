<?php

if (!defined('_CAN_LOAD_FILES_'))
	exit;

class cw06_homecats extends Module
{
	private $_html = '';
	private $_postErrors = array();

	function __construct()
	{
		$this->name = 'cw06_homecats';
		$this->tab = 'Cre@Web06.fr';
		$this->version = '1.0';

		parent::__construct();
		
		$this->displayName = $this->l('Catégories en page d\'accueil');
		$this->description = $this->l('Afficher les catégories principales en page d\'accueil');
	}

	function install()
	{
		if ( !parent::install() OR !$this->registerHook('home'))
			return false;
		return true;
	}




	function hookHome($params)
	{
		global $smarty,$cookie;
		
		$category = new Category(1, intval($cookie->id_lang));
		$subCategories = $category->getSubCategories(intval($cookie->id_lang));
		if (Db::getInstance()->numRows())
			$smarty->assign('subcategories', $subCategories);
		
		$smarty->assign('homeSize',Image::getSize('large'));

		return $this->display(__FILE__, 'cw06_homecats.tpl');
	}
}
