<?php

/*Copyright 2011 maofree  email: msecco@gmx.com

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
 
class Maofree_BlockCategories extends Module
{
	public function __construct()
	{
		$this->name = 'maofree_blockcategories';
		$this->tab = 'others';
		$this->version = '1.0';
		$this->author = 'maofree';
		$this->need_instance = 0;

		parent::__construct();

		$this->displayName = $this->l('Vertical Categories Menu');
		$this->description = $this->l('Adds a block for product categories');
	}

	public function install()
	{
		if (!parent::install() ||
		   !$this->registerHook('leftColumn') ||
		   !$this->registerHook('header') ||
		   !Configuration::updateValue('MAOCATEG_COLORHOVERROOT', 'FF2D1F') ||
		   !Configuration::updateValue('MAOCATEG_COLORROOT', 'FBF5D1') ||
		   !Configuration::updateValue('MAOCATEG_COLORHOVERBRANCH', 'FF2D1F') ||
		   !Configuration::updateValue('MAOCATEG_COLORBRANCH', 'FBF5D1') ||
		   !Configuration::updateValue('MAOCATEG_COLORHOVERSELROOT', 'FF2D1F') ||
		   !Configuration::updateValue('MAOCATEG_COLORSELROOT', 'FFDC51') ||
		   !Configuration::updateValue('MAOCATEG_COLORHOVERSELBRAN', 'FF2D1F') ||
		   !Configuration::updateValue('MAOCATEG_COLORSELBRANCH', 'FFDC51') ||
		   !Configuration::updateValue('MAOCATEG_ROOTTEXTCOLOR', '000000') ||
		   !Configuration::updateValue('MAOCATEG_ROOTHOVERTEXTCOLOR', 'FFFF00') ||
		   !Configuration::updateValue('MAOCATEG_BRANCHTEXTCOLOR', 'FFA500') ||
		   !Configuration::updateValue('MAOCATEG_BRANCHOVERTEXTCOLOR', '0000FF') ||
		   !Configuration::updateValue('MAOCATEG_ROOTSELTEXTCOLOR', '008000') ||
		   !Configuration::updateValue('MAOCATEG_ROOTSELHTEXTCOLOR', 'FFC0CB') ||
		   !Configuration::updateValue('MAOCATEG_BRANCHSELTEXTCOLOR', 'FFD700') ||
		   !Configuration::updateValue('MAOCATEG_BRANCHSELHTEXTCOLOR', 'FFA500') ||
		   !Configuration::updateValue('MAOCATEG_SUBMENUBORDERCOLOR', 'A52A2A') ||
		   !Configuration::updateValue('MAOCATEG_ARROWSCOLOR', 'black') ||
		   !Configuration::updateValue('MAOCATEG_ROOTARROW', 1) ||
		   !Configuration::updateValue('MAOCATEG_TOP_ROOTARROW', 10) ||
		   !Configuration::updateValue('MAOCATEG_TOP_BRANCHARROW', 8) ||
		   !Configuration::updateValue('MAOCATEG_ROOT_BUTTON_HEIGHT', 33) ||
		   !Configuration::updateValue('MAOCATEG_BRANCH_HEIGHT', 30) ||
		   !Configuration::updateValue('MAOCATEG_BRANCH_WIDTH', 190) ||
		   !Configuration::updateValue('MAOCATEG_PADDING_LEFT_ROOT', 10) ||
		   !Configuration::updateValue('MAOCATEG_PADDING_LEFT_BRANCH', 10) ||
		   !Configuration::updateValue('MAOCATEG_ROOT_FONTSIZE', 11) ||
		   !Configuration::updateValue('MAOCATEG_BRANCH_FONTSIZE', 11) ||
		   !Configuration::updateValue('MAOCATEG_SUBMENU_BORDER', 1) ||
		   !Configuration::updateValue('MAOCATEG_DISTANCE_BUTTONS', 5) ||
		   !Configuration::updateValue('MAOCATEG_THEME', 'gray') ||
		   !Configuration::updateValue('MAOCATEG_OPACITY', 0.97) ||
		   !Configuration::updateValue('MAOCATEG_MAXDEPTH', 5)
		)
			return false;
			
		return true;
	}
	
	public function uninstall()
	{
		if (!Configuration::deleteByName('MAOCATEG_COLORHOVERROOT') ||
			!Configuration::deleteByName('MAOCATEG_COLORROOT') ||
			!Configuration::deleteByName('MAOCATEG_COLORHOVERBRANCH') ||
			!Configuration::deleteByName('MAOCATEG_COLORBRANCH') ||
			!Configuration::deleteByName('MAOCATEG_COLORHOVERSELROOT') ||
			!Configuration::deleteByName('MAOCATEG_COLORSELROOT') ||
			!Configuration::deleteByName('MAOCATEG_COLORHOVERSELBRAN') ||
			!Configuration::deleteByName('MAOCATEG_COLORSELBRANCH') ||
         !Configuration::deleteByName('MAOCATEG_ROOTTEXTCOLOR') ||
         !Configuration::deleteByName('MAOCATEG_ROOTHOVERTEXTCOLOR') ||
         !Configuration::deleteByName('MAOCATEG_BRANCHTEXTCOLOR') ||
         !Configuration::deleteByName('MAOCATEG_BRANCHOVERTEXTCOLOR') ||
         !Configuration::deleteByName('MAOCATEG_ROOTSELTEXTCOLOR') ||
         !Configuration::deleteByName('MAOCATEG_ROOTSELHTEXTCOLOR') ||
         !Configuration::deleteByName('MAOCATEG_BRANCHSELTEXTCOLOR') ||
         !Configuration::deleteByName('MAOCATEG_BRANCHSELHTEXTCOLOR') ||
         !Configuration::deleteByName('MAOCATEG_SUBMENUBORDERCOLOR') ||
			!Configuration::deleteByName('MAOCATEG_ARROWSCOLOR') ||
         !Configuration::deleteByName('MAOCATEG_ROOTARROW') ||
         !Configuration::deleteByName('MAOCATEG_TOP_ROOTARROW') ||
         !Configuration::deleteByName('MAOCATEG_TOP_BRANCHARROW') ||
         !Configuration::deleteByName('MAOCATEG_ROOT_BUTTON_HEIGHT') ||
         !Configuration::deleteByName('MAOCATEG_BRANCH_HEIGHT') ||
         !Configuration::deleteByName('MAOCATEG_BRANCH_WIDTH') ||
         !Configuration::deleteByName('MAOCATEG_PADDING_LEFT_ROOT') ||
         !Configuration::deleteByName('MAOCATEG_PADDING_LEFT_BRANCH') ||
         !Configuration::deleteByName('MAOCATEG_ROOT_FONTSIZE') ||
         !Configuration::deleteByName('MAOCATEG_BRANCH_FONTSIZE') ||
         !Configuration::deleteByName('MAOCATEG_SUBMENU_BORDER') ||
         !Configuration::deleteByName('MAOCATEG_DISTANCE_BUTTONS') ||
         !Configuration::deleteByName('MAOCATEG_THEME') ||
         !Configuration::deleteByName('MAOCATEG_OPACITY') ||
			!Configuration::deleteByName('MAOCATEG_MAXDEPTH') ||
		   !parent::uninstall()
		)
			return false;
			
		return true;
	}

	public function getContent()
	{
		$output = '<style type="text/css">.margin-form { padding: 0 0 1em 310px; margin-top:10px } label { width: 300px; } div.divleftmenu { width:440px;float:left;margin:20px 0; } div.divrightmenu { width:440px;float:right;margin:20px 0; } label.labelmenu { width:340px; padding-top: 0; }</style>';
		$output .= '<link type="text/css" href="'._MODULE_DIR_.$this->name.'/css/ui-lightness/jquery-ui-1.8.13.custom.css" rel="stylesheet" />';
      $output .= '<link href="'._MODULE_DIR_.$this->name.'/js/uploadify/uploadify.css" type="text/css" rel="stylesheet" />';
      $output .= '<script type="text/javascript">var absolute_url = "'._MODULE_DIR_.$this->name.'";</script>';
      $output .= '<script type="text/javascript" src="'._MODULE_DIR_.$this->name.'/js/uploadify/swfobject.js"></script>';
      $output .= '<script type="text/javascript" src="'._MODULE_DIR_.$this->name.'/js/uploadify/jquery.uploadify.v2.1.4.min.js"></script>';
      $output .= '<script type="text/javascript" src="'._MODULE_DIR_.$this->name.'/js/settings-uploader.js"></script>';
		$output .= '<script type="text/javascript" src="'._MODULE_DIR_.$this->name.'/js/jquery-ui-1.8.13.custom.min.js"></script>';
		$output .= '<script type="text/javascript" src="'._MODULE_DIR_.$this->name.'/js/colorPicker/colorPicker.js"></script>';
		$output .= '<h2>'.$this->displayName.'</h2>';
		if (Tools::isSubmit('submitMaoBlockCategories'))
		{
			$maxDepth = (int)Tools::getValue('maxDepth');
			$colorhoverroot = Tools::getValue('colorhoverroot');
			$colorroot = Tools::getValue('colorroot');
			$colorhoverbranch = Tools::getValue('colorhoverbranch');
			$colorbranch = Tools::getValue('colorbranch');
			$colorhoverselroot = Tools::getValue('colorhoverselroot');
			$colorselroot = Tools::getValue('colorselroot');
			$colorhoverselbranch = Tools::getValue('colorhoverselbranch');
			$colorselbranch = Tools::getValue('colorselbranch');
			$roottextcolor = Tools::getValue('roottextcolor');
			$roothovertextcolor = Tools::getValue('roothovertextcolor');
			$branchtextcolor = Tools::getValue('branchtextcolor');
			$branchovertextcolor = Tools::getValue('branchovertextcolor');
			$rootselectedtextcolor = Tools::getValue('rootselectedtextcolor');
			$rootselectedhovertextcolor = Tools::getValue('rootselectedhovertextcolor');
			$branchselectedtextcolor = Tools::getValue('branchselectedtextcolor');
			$branchselectedhovertextcolor = Tools::getValue('branchselectedhovertextcolor');
			$submenubordercolor = Tools::getValue('submenubordercolor');
			$arrowscolor = Tools::getValue('arrowscolor');
			$rootarrow = (int)Tools::getValue('rootarrow');
			$toprootarrow = (float)Tools::getValue('toprootarrow');
			$topbrancharrow = (float)Tools::getValue('topbrancharrow');
			$rootbuttonheight = (float)Tools::getValue('rootbuttonheight');
			$branchheight = (float)Tools::getValue('branchheight');
			$branchwidth = (int)Tools::getValue('branchwidth');
			$menutheme = Tools::getValue('menutheme');
			$paddingtextbutton = (float)Tools::getValue('paddingtextbutton');
			$paddingtextbranch = (float)Tools::getValue('paddingtextbranch');
			$buttonfontsize = (float)Tools::getValue('buttonfontsize');
			$branchfontsize = (float)Tools::getValue('branchfontsize');
			$submenuborder = (float)Tools::getValue('submenuborder');
			$distancerootbuttons = (float)Tools::getValue('distancerootbuttons');
			$opacity = (float)Tools::getValue('opacity');
			if (!$maxDepth OR $maxDepth < 0 OR !Validate::isInt($maxDepth))
				$output .= '<div class="alert error">'.$this->l('Maximum depth: Invalid number.').'</div>';
			elseif ($rootarrow != 0 AND $rootarrow != 1)
				$output .= '<div class="alert error">'.$this->l('Root Arrow: Invalid choice.').'</div>';
			elseif (!Validate::isUnsignedFloat($toprootarrow))
				$output .= '<div class="alert error">'.$this->l('The Top of Root Arrow: Invalid number.').'</div>';
			elseif (!Validate::isUnsignedFloat($topbrancharrow))
				$output .= '<div class="alert error">'.$this->l('The Top of Branch Arrow: Invalid number.').'</div>';
			elseif (!Validate::isUnsignedFloat($rootbuttonheight))
				$output .= '<div class="alert error">'.$this->l('Root Button Height: Invalid number.').'</div>';
			elseif (!Validate::isUnsignedFloat($branchheight))
				$output .= '<div class="alert error">'.$this->l('Branch Height: Invalid number.').'</div>';
			elseif (!Validate::isInt($branchwidth))
				$output .= '<div class="alert error">'.$this->l('Branch Width: Invalid number.').'</div>';
			elseif (!Validate::isUnsignedFloat($paddingtextbutton))
				$output .= '<div class="alert error">'.$this->l('Padding-left of button text: Invalid number.').'</div>';
			elseif (!Validate::isUnsignedFloat($paddingtextbranch))
				$output .= '<div class="alert error">'.$this->l('Padding-left of branch text: Invalid number.').'</div>';
			elseif (!Validate::isUnsignedFloat($buttonfontsize))
				$output .= '<div class="alert error">'.$this->l('Button Font-size: Invalid number.').'</div>';
			elseif (!Validate::isUnsignedFloat($branchfontsize))
				$output .= '<div class="alert error">'.$this->l('Branch Font-size: Invalid number.').'</div>';
			elseif (!Validate::isUnsignedFloat($submenuborder))
				$output .= '<div class="alert error">'.$this->l('Submenu Border: Invalid number.').'</div>';
			elseif (!Validate::isUnsignedFloat($distancerootbuttons))
				$output .= '<div class="alert error">'.$this->l('Distance between the root buttons: Invalid number.').'</div>';
			elseif (!Validate::isUnsignedFloat($opacity))
				$output .= '<div class="alert error">'.$this->l('Submenu Opacity: Invalid number.').'</div>';
			else
			{
				Configuration::updateValue('MAOCATEG_MAXDEPTH', (int)($maxDepth));
				Configuration::updateValue('MAOCATEG_COLORHOVERROOT', $colorhoverroot);
				Configuration::updateValue('MAOCATEG_COLORROOT', $colorroot);
				Configuration::updateValue('MAOCATEG_COLORHOVERBRANCH', $colorhoverbranch);
				Configuration::updateValue('MAOCATEG_COLORBRANCH', $colorbranch);
				Configuration::updateValue('MAOCATEG_COLORHOVERSELROOT', $colorhoverselroot);
				Configuration::updateValue('MAOCATEG_COLORSELROOT', $colorselroot);
				Configuration::updateValue('MAOCATEG_COLORHOVERSELBRAN', $colorhoverselbranch);
				Configuration::updateValue('MAOCATEG_COLORSELBRANCH', $colorselbranch);
				Configuration::updateValue('MAOCATEG_ROOTTEXTCOLOR', $roottextcolor);
				Configuration::updateValue('MAOCATEG_ROOTHOVERTEXTCOLOR', $roothovertextcolor);
				Configuration::updateValue('MAOCATEG_BRANCHTEXTCOLOR', $branchtextcolor);
				Configuration::updateValue('MAOCATEG_BRANCHOVERTEXTCOLOR', $branchovertextcolor);
				Configuration::updateValue('MAOCATEG_ROOTSELTEXTCOLOR', $rootselectedtextcolor);
				Configuration::updateValue('MAOCATEG_ROOTSELHTEXTCOLOR', $rootselectedhovertextcolor);
				Configuration::updateValue('MAOCATEG_BRANCHSELTEXTCOLOR', $branchselectedtextcolor);
				Configuration::updateValue('MAOCATEG_BRANCHSELHTEXTCOLOR', $branchselectedhovertextcolor);
				Configuration::updateValue('MAOCATEG_SUBMENUBORDERCOLOR', $submenubordercolor);
				Configuration::updateValue('MAOCATEG_ARROWSCOLOR', $arrowscolor);
				Configuration::updateValue('MAOCATEG_ROOTARROW', $rootarrow);
				Configuration::updateValue('MAOCATEG_TOP_ROOTARROW', (float)($toprootarrow));
				Configuration::updateValue('MAOCATEG_TOP_BRANCHARROW', (float)($topbrancharrow));
				Configuration::updateValue('MAOCATEG_ROOT_BUTTON_HEIGHT', (float)($rootbuttonheight));
				Configuration::updateValue('MAOCATEG_BRANCH_HEIGHT', (float)($branchheight));
				Configuration::updateValue('MAOCATEG_BRANCH_WIDTH', (int)($branchwidth));
				Configuration::updateValue('MAOCATEG_PADDING_LEFT_ROOT', (float)($paddingtextbutton));
				Configuration::updateValue('MAOCATEG_PADDING_LEFT_BRANCH', (float)($paddingtextbranch));
				Configuration::updateValue('MAOCATEG_ROOT_FONTSIZE', (float)($buttonfontsize));
				Configuration::updateValue('MAOCATEG_BRANCH_FONTSIZE', (float)($branchfontsize));
				Configuration::updateValue('MAOCATEG_SUBMENU_BORDER', (float)($submenuborder));
				Configuration::updateValue('MAOCATEG_DISTANCE_BUTTONS', (float)($distancerootbuttons));
				Configuration::updateValue('MAOCATEG_THEME', $menutheme);
				Configuration::updateValue('MAOCATEG_OPACITY', (float)($opacity));
				$output .= '<div class="conf confirm"><img src="../img/admin/ok.gif" alt="'.$this->l('Confirmation').'" /> '.$this->l('Settings updated').'</div>';
			}
		}
		return $output.$this->displayForm();
	}


	public function displayForm()
	{
		return '
		<fieldset>
			<legend><img src="'.$this->_path.'logo.gif" alt="maofree\'s module" title="maofree\'s module" />maofree</legend>
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
				<legend><img src="'.$this->_path.'logo.gif" alt="maofree\'s module" title="maofree\'s module" />'.$this->l('Settings').'</legend>

				<br /><h2>'.$this->l('General settings').':</h2><br />

				<label style="padding-top: 10px">'.$this->l('Maximum depth').'</label>
				<div class="margin-form">
					<input type="text"  size="2" maxlength="2" name="maxDepth" value="'.Configuration::get('MAOCATEG_MAXDEPTH').'" />
					<p class="clear">'.$this->l('Set the maximum depth of sublevels displayed in this block (0 = infinite)').'</p>
				</div>
				
				<label style="padding-top: 10px">'.$this->l('Color of the arrows').':</label>
				<div class="margin-form">
					<select name="arrowscolor">
						<option value="black" '.(Tools::getValue('arrowscolor', Configuration::get('MAOCATEG_ARROWSCOLOR')) == 'black' ? 'selected="selected"' : '').'>'.$this->l('black').'</option>
						<option value="white" '.(Tools::getValue('arrowscolor', Configuration::get('MAOCATEG_ARROWSCOLOR')) == 'white' ? 'selected="selected"' : '').'>'.$this->l('white').'</option>
					</select>
				</div><br />
				
				<label style="padding-top: 10px">'.$this->l('Root Arrow').':</label>
				<div class="margin-form">
					<input type="radio" name="rootarrow" id="rootarrow_on" value="1" '.(Tools::getValue('rootarrow', Configuration::get('MAOCATEG_ROOTARROW')) ? 'checked="checked" ' : '').'/>
					<label class="t" for="rootarrow_on"><img src="../img/admin/enabled.gif" alt="'.$this->l('Enabled').'" title="'.$this->l('Enabled').'" /></label>
					<input type="radio" name="rootarrow" id="rootarrow_off" value="0" '.(!Tools::getValue('rootarrow', Configuration::get('MAOCATEG_ROOTARROW')) ? 'checked="checked" ' : '').'/>
					<label class="t" for="rootarrow_off"><img src="../img/admin/disabled.gif" alt="'.$this->l('Disabled').'" title="'.$this->l('Disabled').'" /></label>
				</div>
				
				<label style="padding-top: 25px">'.$this->l('The Top of Root Arrow').':</label>
				<div class="margin-form">
					<label for="toprootarrow-value">('.$this->l('increment of').' 0.1):</label>
					<input name="toprootarrow" type="text" id="toprootarrow-value" size="4" style="border:0; color:#f6931f; font-weight:bold;" />('.$this->l('default').': 10px)
					<div id="toprootarrow-bar"></div>
				</div>
				
				<label style="padding-top: 25px">'.$this->l('The Top of Branch Arrow').':</label>
				<div class="margin-form">
					<label for="topbrancharrow-value">('.$this->l('increment of').' 0.1):</label>
					<input name="topbrancharrow" type="text" id="topbrancharrow-value" size="4" style="border:0; color:#f6931f; font-weight:bold;" />('.$this->l('default').': 8px)
					<div id="topbrancharrow-bar"></div>
				</div>
				
			   <label style="padding-top: 25px">'.$this->l('Root Button Height').':</label>
				<div class="margin-form">
					<label for="rootbuttonheight-value">('.$this->l('increment of').' 0.1):</label>
					<input name="rootbuttonheight" type="text" id="rootbuttonheight-value" size="4" style="border:0; color:#f6931f; font-weight:bold;" />('.$this->l('default').': 33px)
					<div id="rootbuttonheight-bar"></div>
				</div>
				
			   <label style="padding-top: 25px">'.$this->l('Branch Height').':</label>
				<div class="margin-form">
					<label for="branchheight-value">('.$this->l('increment of').' 0.1):</label>
					<input name="branchheight" type="text" id="branchheight-value" size="4" style="border:0; color:#f6931f; font-weight:bold;" />('.$this->l('default').': 30px)
					<div id="branchheight-bar"></div>
				</div>
				
			   <label style="padding-top: 25px">'.$this->l('Branch Width').':</label>
				<div class="margin-form">
					<label for="branchwidth-value">('.$this->l('increment of').' 1):</label>
					<input name="branchwidth" type="text" id="branchwidth-value" size="4" style="border:0; color:#f6931f; font-weight:bold;" />('.$this->l('default').': 190px)
					<div id="branchwidth-bar"></div>
				</div>
				
			   <label style="padding-top: 25px">'.$this->l('Padding-left of button text').':</label>
				<div class="margin-form">
					<label for="paddingtextbutton-value">('.$this->l('increment of').' 0.1):</label>
					<input name="paddingtextbutton" type="text" id="paddingtextbutton-value" size="4" style="border:0; color:#f6931f; font-weight:bold;" />('.$this->l('default').': 10px)
					<div id="paddingtextbutton-bar"></div>
				</div>
				
			   <label style="padding-top: 25px">'.$this->l('Padding-left of branch text').':</label>
				<div class="margin-form">
					<label for="paddingtextbranch-value">('.$this->l('increment of').' 0.1):</label>
					<input name="paddingtextbranch" type="text" id="paddingtextbranch-value" size="4" style="border:0; color:#f6931f; font-weight:bold;" />('.$this->l('default').': 10px)
					<div id="paddingtextbranch-bar"></div>
				</div>
				
			   <label style="padding-top: 25px">'.$this->l('Button Font-size').':</label>
				<div class="margin-form">
					<label for="buttonfontsize-value">('.$this->l('increment of').' 0.1):</label>
					<input name="buttonfontsize" type="text" id="buttonfontsize-value" size="4" style="border:0; color:#f6931f; font-weight:bold;" />('.$this->l('default').': 11px)
					<div id="buttonfontsize-bar"></div>
				</div>
				
			   <label style="padding-top: 25px">'.$this->l('Branch Font-size').':</label>
				<div class="margin-form">
					<label for="branchfontsize-value">('.$this->l('increment of').' 0.1):</label>
					<input name="branchfontsize" type="text" id="branchfontsize-value" size="4" style="border:0; color:#f6931f; font-weight:bold;" />('.$this->l('default').': 11px)
					<div id="branchfontsize-bar"></div>
				</div>
				
			   <label style="padding-top: 25px">'.$this->l('Submenu Border').':</label>
				<div class="margin-form">
					<label for="submenuborder-value">('.$this->l('increment of').' 0.1):</label>
					<input name="submenuborder" type="text" id="submenuborder-value" size="4" style="border:0; color:#f6931f; font-weight:bold;" />('.$this->l('default').': 1px)
					<div id="submenuborder-bar"></div>
				</div>
				
			   <label style="padding-top: 25px">'.$this->l('Distance between the root buttons').':</label>
				<div class="margin-form">
					<label for="distancerootbuttons-value">('.$this->l('increment of').' 0.1):</label>
					<input name="distancerootbuttons" type="text" id="distancerootbuttons-value" size="4" style="border:0; color:#f6931f; font-weight:bold;" />('.$this->l('default').': 5px)
					<div id="distancerootbuttons-bar"></div>
				</div>
				
				<label style="padding-top: 25px">'.$this->l('Submenu Opacity').':</label>
				<div class="margin-form">
					<label for="opacity-value">('.$this->l('increment of').' 0.01):</label>
					<input name="opacity" type="text" id="opacity-value" size="4" style="border:0; color:#f6931f; font-weight:bold;" />('.$this->l('default').': 0.97)
					<div id="opacity-bar"></div>
				</div><br />
				
				<label style="padding-top: 10px">'.$this->l('Choose a theme').':</label>
				<div class="margin-form">
					<select name="menutheme">
						<option value="black" '.(Tools::getValue('menutheme', Configuration::get('MAOCATEG_THEME')) == 'black' ? 'selected="selected"' : '').'>'.$this->l('black').'</option>
						<option value="blue" '.(Tools::getValue('menutheme', Configuration::get('MAOCATEG_THEME')) == 'blue' ? 'selected="selected"' : '').'>'.$this->l('blue').'</option>
						<option value="gray" '.(Tools::getValue('menutheme', Configuration::get('MAOCATEG_THEME')) == 'gray' ? 'selected="selected"' : '').'>'.$this->l('gray').'</option>							
						<option value="orange" '.(Tools::getValue('menutheme', Configuration::get('MAOCATEG_THEME')) == 'orange' ? 'selected="selected"' : '').'>'.$this->l('orange').'</option>
						<option value="yellow" '.(Tools::getValue('menutheme', Configuration::get('MAOCATEG_THEME')) == 'yellow' ? 'selected="selected"' : '').'>'.$this->l('yellow').'</option>
						<option value="custom" '.(Tools::getValue('menutheme', Configuration::get('MAOCATEG_THEME')) == 'custom' ? 'selected="selected"' : '').'>'.$this->l('your custom theme').'</option>
						<option value="none" '.(Tools::getValue('menutheme', Configuration::get('MAOCATEG_THEME')) == 'none' ? 'selected="selected"' : '').'>'.$this->l('no theme, only with colors').'</option>
					</select>
				</div><br />

				<label style="padding-top: 15px; width: 470px">'.$this->l('Select images (only for a custom theme)').':</label>
				<div class="margin-form" style="padding: 0 0 1em 500px"><input id="file_upload" name="file_upload" type="file" /></div>
				<h3 style="color: orange; margin-left: 50px">'.$this->l('Uploader Instructions').':</h3>
				<p class="clear" style="margin-left: 70px">'.$this->l('Allowed only .gif images, named').': hover.gif, hover-selected.gif, button.gif, selected.gif<br />
				('.$this->l('rename your images with these names').')</p>
				<p class="clear" style="margin-left: 70px">'.$this->l('Remember to set "Height" with the exact values of your images').'.</p><br />

				<br /><h2>'.$this->l('Color settings').':</h2><br />

				<h3 style="color: orange; margin-left: 50px">'.$this->l('Background color').':</h3>

				<div class="divleftmenu">
					<label class="labelmenu">'.$this->l('Hover color of root buttons').':</label>
					<input type="text" maxlength="6" size="6" onmouseover="colorPicker(event)" name="colorhoverroot" value="'.Tools::getValue('colorhoverroot', Configuration::get('MAOCATEG_COLORHOVERROOT')).'" style="background-color: #'.Tools::getValue('colorhoverroot', Configuration::get('MAOCATEG_COLORHOVERROOT')).'" />
					<p class="center">('.$this->l('default').': #FF2D1F)</p>
				</div>
				
				<div class="divrightmenu">
					<label class="labelmenu">'.$this->l('Color of root buttons').':</label>
					<input type="text" maxlength="6" size="6" onmouseover="colorPicker(event)" name="colorroot" value="'.Tools::getValue('colorroot', Configuration::get('MAOCATEG_COLORROOT')).'" style="background-color: #'.Tools::getValue('colorroot', Configuration::get('MAOCATEG_COLORROOT')).'" />
					<p class="center">('.$this->l('default').': #FBF5D1)</p>
				</div>
				
				<div class="divleftmenu">
					<label class="labelmenu">'.$this->l('Hover color of branches').':</label>
					<input type="text" maxlength="6" size="6" onmouseover="colorPicker(event)" name="colorhoverbranch" value="'.Tools::getValue('colorhoverbranch', Configuration::get('MAOCATEG_COLORHOVERBRANCH')).'" style="background-color: #'.Tools::getValue('colorhoverbranch', Configuration::get('MAOCATEG_COLORHOVERBRANCH')).'" />
					<p class="center">('.$this->l('default').': #FF2D1F)</p>
				</div>
				
				<div class="divrightmenu">
					<label class="labelmenu">'.$this->l('Color of branches').':</label>
					<input type="text" maxlength="6" size="6" onmouseover="colorPicker(event)" name="colorbranch" value="'.Tools::getValue('colorbranch', Configuration::get('MAOCATEG_COLORBRANCH')).'" style="background-color: #'.Tools::getValue('colorbranch', Configuration::get('MAOCATEG_COLORBRANCH')).'" />
					<p class="center">('.$this->l('default').': #FBF5D1)</p>
				</div>
				
				<div class="divleftmenu">
					<label class="labelmenu">'.$this->l('Hover color of selected root buttons').':</label>
					<input type="text" maxlength="6" size="6" onmouseover="colorPicker(event)" name="colorhoverselroot" value="'.Tools::getValue('colorhoverselroot', Configuration::get('MAOCATEG_COLORHOVERSELROOT')).'" style="background-color: #'.Tools::getValue('colorhoverselroot', Configuration::get('MAOCATEG_COLORHOVERSELROOT')).'" />
					<p class="center">('.$this->l('default').': #FF2D1F)</p>
				</div>
				
				<div class="divrightmenu">
					<label class="labelmenu">'.$this->l('Color of selected root buttons').':</label>
					<input type="text" maxlength="6" size="6" onmouseover="colorPicker(event)" name="colorselroot" value="'.Tools::getValue('colorselroot', Configuration::get('MAOCATEG_COLORSELROOT')).'" style="background-color: #'.Tools::getValue('colorselroot', Configuration::get('MAOCATEG_COLORSELROOT')).'" />
					<p class="center">('.$this->l('default').': #FFDC51)</p>
				</div>
				
				<div class="divleftmenu">
					<label class="labelmenu">'.$this->l('Hover color of selected branches').':</label>
					<input type="text" maxlength="6" size="6" onmouseover="colorPicker(event)" name="colorhoverselbranch" value="'.Tools::getValue('colorhoverselbranch', Configuration::get('MAOCATEG_COLORHOVERSELBRAN')).'" style="background-color: #'.Tools::getValue('colorhoverselbranch', Configuration::get('MAOCATEG_COLORHOVERSELBRAN')).'" />
					<p class="center">('.$this->l('default').': #FF2D1F)</p>
				</div>
				
				<div class="divrightmenu">
					<label class="labelmenu">'.$this->l('Color of selected branches').':</label>
					<input type="text" maxlength="6" size="6" onmouseover="colorPicker(event)" name="colorselbranch" value="'.Tools::getValue('colorselbranch', Configuration::get('MAOCATEG_COLORSELBRANCH')).'" style="background-color: #'.Tools::getValue('colorselbranch', Configuration::get('MAOCATEG_COLORSELBRANCH')).'" />
					<p class="center">('.$this->l('default').': #FFDC51)</p>
				</div>
				
				<h3 style="color: orange; margin-left: 50px">'.$this->l('Text color').':</h3>	
				
				<div class="divleftmenu">
					<label class="labelmenu">'.$this->l('Text Color of root buttons').':</label>
					<input type="text" maxlength="6" size="6" onmouseover="colorPicker(event)" name="roottextcolor" value="'.Tools::getValue('roottextcolor', Configuration::get('MAOCATEG_ROOTTEXTCOLOR')).'" style="background-color: #'.Tools::getValue('roottextcolor', Configuration::get('MAOCATEG_ROOTTEXTCOLOR')).'" />
					<p class="center">('.$this->l('default').': #000000)</p>
				</div>
				
				<div class="divrightmenu">
					<label class="labelmenu">'.$this->l('Hover text color of root buttons').':</label>
					<input type="text" maxlength="6" size="6" onmouseover="colorPicker(event)" name="roothovertextcolor" value="'.Tools::getValue('roothovertextcolor', Configuration::get('MAOCATEG_ROOTHOVERTEXTCOLOR')).'" style="background-color: #'.Tools::getValue('roothovertextcolor', Configuration::get('MAOCATEG_ROOTHOVERTEXTCOLOR')).'" />
					<p class="center">('.$this->l('default').': #FFFF00)</p>
				</div>
				
				<div class="divleftmenu">
					<label class="labelmenu">'.$this->l('Text color of branches').':</label>
					<input type="text" maxlength="6" size="6" onmouseover="colorPicker(event)" name="branchtextcolor" value="'.Tools::getValue('branchtextcolor', Configuration::get('MAOCATEG_BRANCHTEXTCOLOR')).'" style="background-color: #'.Tools::getValue('branchtextcolor', Configuration::get('MAOCATEG_BRANCHTEXTCOLOR')).'" />
					<p class="center">('.$this->l('default').': #FFA500)</p>
				</div>
				
				<div class="divrightmenu">
					<label class="labelmenu">'.$this->l('Hover text color of branches').':</label>
					<input type="text" maxlength="6" size="6" onmouseover="colorPicker(event)" name="branchovertextcolor" value="'.Tools::getValue('branchovertextcolor', Configuration::get('MAOCATEG_BRANCHOVERTEXTCOLOR')).'" style="background-color: #'.Tools::getValue('branchovertextcolor', Configuration::get('MAOCATEG_BRANCHOVERTEXTCOLOR')).'" />
					<p class="center">('.$this->l('default').': #0000FF)</p>
				</div>
				
				<div class="divleftmenu">
					<label class="labelmenu">'.$this->l('Text color of selected root buttons').':</label>
					<input type="text" maxlength="6" size="6" onmouseover="colorPicker(event)" name="rootselectedtextcolor" value="'.Tools::getValue('rootselectedtextcolor', Configuration::get('MAOCATEG_ROOTSELTEXTCOLOR')).'" style="background-color: #'.Tools::getValue('rootselectedtextcolor', Configuration::get('MAOCATEG_ROOTSELTEXTCOLOR')).'" />
					<p class="center">('.$this->l('default').': #008000)</p>
				</div>
				
				<div class="divrightmenu">
					<label class="labelmenu">'.$this->l('Hover text color of selected root buttons').':</label>
					<input type="text" maxlength="6" size="6" onmouseover="colorPicker(event)" name="rootselectedhovertextcolor" value="'.Tools::getValue('rootselectedhovertextcolor', Configuration::get('MAOCATEG_ROOTSELHTEXTCOLOR')).'" style="background-color: #'.Tools::getValue('rootselectedhovertextcolor', Configuration::get('MAOCATEG_ROOTSELHTEXTCOLOR')).'" />
					<p class="center">('.$this->l('default').': #FFC0CB)</p>
				</div>
				
				<div class="divleftmenu">
					<label class="labelmenu">'.$this->l('Text color of selected branches').':</label>
					<input type="text" maxlength="6" size="6" onmouseover="colorPicker(event)" name="branchselectedtextcolor" value="'.Tools::getValue('branchselectedtextcolor', Configuration::get('MAOCATEG_BRANCHSELTEXTCOLOR')).'" style="background-color: #'.Tools::getValue('branchselectedtextcolor', Configuration::get('MAOCATEG_BRANCHSELTEXTCOLOR')).'" />
					<p class="center">('.$this->l('default').': #FFD700)</p>
				</div>
				
				<div class="divrightmenu">
					<label class="labelmenu">'.$this->l('Hover text color of selected branches').':</label>
					<input type="text" maxlength="6" size="6" onmouseover="colorPicker(event)" name="branchselectedhovertextcolor" value="'.Tools::getValue('branchselectedhovertextcolor', Configuration::get('MAOCATEG_BRANCHSELHTEXTCOLOR')).'" style="background-color: #'.Tools::getValue('branchselectedhovertextcolor', Configuration::get('MAOCATEG_BRANCHSELHTEXTCOLOR')).'" />
					<p class="center">('.$this->l('default').': #FFA500)</p>
				</div>

				<h3 style="color: orange; margin-left: 50px">'.$this->l('Border color').':</h3>	

				<div class="divleftmenu">
					<label class="labelmenu">'.$this->l('Submenu border color').':</label>
					<input type="text" maxlength="6" size="6" onmouseover="colorPicker(event)" name="submenubordercolor" value="'.Tools::getValue('submenubordercolor', Configuration::get('MAOCATEG_SUBMENUBORDERCOLOR')).'" style="background-color: #'.Tools::getValue('submenubordercolor', Configuration::get('MAOCATEG_SUBMENUBORDERCOLOR')).'" />
					<p class="center">('.$this->l('default').': #A52A2A)</p>
				</div>
				
            <script type="text/javascript">
					$(function(){
						
						$("#toprootarrow-bar").slider({
				         value: '.Tools::getValue('toprootarrow', Configuration::get('MAOCATEG_TOP_ROOTARROW')).',
							min: 1,
							max: 40,
							animate: true,
							step: 0.1,
							slide: function( event, ui ) {
								$( "#toprootarrow-value" ).val( ui.value );
							}
						});
                  $("#toprootarrow-value").val($("#toprootarrow-bar").slider("value"));
                  
						$("#topbrancharrow-bar").slider({
				         value: '.Tools::getValue('topbrancharrow', Configuration::get('MAOCATEG_TOP_BRANCHARROW')).',
							min: 1,
							max: 40,
							animate: true,
							step: 0.1,
							slide: function( event, ui ) {
								$( "#topbrancharrow-value" ).val( ui.value );
							}
						});
                  $("#topbrancharrow-value").val($("#topbrancharrow-bar").slider("value"));
                  
						$("#rootbuttonheight-bar").slider({
				         value: '.Tools::getValue('rootbuttonheight', Configuration::get('MAOCATEG_ROOT_BUTTON_HEIGHT')).',
							min: 1,
							max: 100,
							animate: true,
							step: 0.1,
							slide: function( event, ui ) {
								$( "#rootbuttonheight-value" ).val( ui.value );
							}
						});
                  $("#rootbuttonheight-value").val($("#rootbuttonheight-bar").slider("value"));
                  
						$("#branchheight-bar").slider({
				         value: '.Tools::getValue('branchheight', Configuration::get('MAOCATEG_BRANCH_HEIGHT')).',
							min: 1,
							max: 100,
							animate: true,
							step: 0.1,
							slide: function( event, ui ) {
								$( "#branchheight-value" ).val( ui.value );
							}
						});
                  $("#branchheight-value").val($("#branchheight-bar").slider("value"));
                  
						$("#branchwidth-bar").slider({
				         value: '.Tools::getValue('branchwidth', Configuration::get('MAOCATEG_BRANCH_WIDTH')).',
							min: 50,
							max: 500,
							animate: true,
							step: 1,
							slide: function( event, ui ) {
								$( "#branchwidth-value" ).val( ui.value );
							}
						});
                  $("#branchwidth-value").val($("#branchwidth-bar").slider("value"));
                  
						$("#paddingtextbutton-bar").slider({
				         value: '.Tools::getValue('paddingtextbutton', Configuration::get('MAOCATEG_PADDING_LEFT_ROOT')).',
							min: 1,
							max: 50,
							animate: true,
							step: 0.1,
							slide: function( event, ui ) {
								$( "#paddingtextbutton-value" ).val( ui.value );
							}
						});
                  $("#paddingtextbutton-value").val($("#paddingtextbutton-bar").slider("value"));
                  
						$("#paddingtextbranch-bar").slider({
				         value: '.Tools::getValue('paddingtextbranch', Configuration::get('MAOCATEG_PADDING_LEFT_BRANCH')).',
							min: 1,
							max: 50,
							animate: true,
							step: 0.1,
							slide: function( event, ui ) {
								$( "#paddingtextbranch-value" ).val( ui.value );
							}
						});
                  $("#paddingtextbranch-value").val($("#paddingtextbranch-bar").slider("value"));
                  
						$("#buttonfontsize-bar").slider({
				         value: '.Tools::getValue('buttonfontsize', Configuration::get('MAOCATEG_ROOT_FONTSIZE')).',
							min: 1,
							max: 40,
							animate: true,
							step: 0.1,
							slide: function( event, ui ) {
								$( "#buttonfontsize-value" ).val( ui.value );
							}
						});
                  $("#buttonfontsize-value").val($("#buttonfontsize-bar").slider("value"));
                  
						$("#branchfontsize-bar").slider({
				         value: '.Tools::getValue('branchfontsize', Configuration::get('MAOCATEG_BRANCH_FONTSIZE')).',
							min: 1,
							max: 40,
							animate: true,
							step: 0.1,
							slide: function( event, ui ) {
								$( "#branchfontsize-value" ).val( ui.value );
							}
						});
                  $("#branchfontsize-value").val($("#branchfontsize-bar").slider("value"));
                  
						$("#submenuborder-bar").slider({
				         value: '.Tools::getValue('submenuborder', Configuration::get('MAOCATEG_SUBMENU_BORDER')).',
							min: 0,
							max: 20,
							animate: true,
							step: 0.1,
							slide: function( event, ui ) {
								$( "#submenuborder-value" ).val( ui.value );
							}
						});
                  $("#submenuborder-value").val($("#submenuborder-bar").slider("value"));
                  
						$("#distancerootbuttons-bar").slider({
				         value: '.Tools::getValue('distancerootbuttons', Configuration::get('MAOCATEG_DISTANCE_BUTTONS')).',
							min: 0,
							max: 20,
							animate: true,
							step: 0.1,
							slide: function( event, ui ) {
								$( "#distancerootbuttons-value" ).val( ui.value );
							}
						});
                  $("#distancerootbuttons-value").val($("#distancerootbuttons-bar").slider("value"));
                  
						$("#opacity-bar").slider({
				         value: '.Tools::getValue('opacity', Configuration::get('MAOCATEG_OPACITY')).',
							min: 0.1,
							max: 1,
							animate: true,
							step: 0.01,
							slide: function( event, ui ) {
								$( "#opacity-value" ).val( ui.value );
							}
						});
                  $("#opacity-value").val($("#opacity-bar").slider("value"));
						
					});
				</script>
								
				<div class="margin-form clear"><input type="submit" name="submitMaoBlockCategories" value="'.$this->l('Save').'" class="button" /></div>
			</fieldset>
		</form>';
	}
	
	private function getTree($resultParents, $resultIds, $maxDepth, $id_category = 1, $currentDepth = 0)
	{
		global $link;

		$children = array();
		if (isset($resultParents[$id_category]) AND sizeof($resultParents[$id_category]) AND ($maxDepth == 0 OR $currentDepth < $maxDepth))
			foreach ($resultParents[$id_category] as $subcat)
				$children[] = $this->getTree($resultParents, $resultIds, $maxDepth, $subcat['id_category'], $currentDepth + 1);
		if (!isset($resultIds[$id_category]))
			return false;
		return array('id' => $id_category, 'link' => $link->getCategoryLink($id_category, $resultIds[$id_category]['link_rewrite']),
					 'name' => $resultIds[$id_category]['name'], 'desc'=> $resultIds[$id_category]['description'],
					 'children' => $children);
	}

	public function hookLeftColumn($params)
	{
		global $smarty, $cookie;

		$id_customer = (int)($params['cookie']->id_customer);
		$groups = $id_customer ? implode(', ', Customer::getGroupsStatic($id_customer)) : _PS_DEFAULT_CUSTOMER_GROUP_;
		$id_product = (int)(Tools::getValue('id_product', 0));
		$id_category = (int)(Tools::getValue('id_category', 0));
		$id_lang = (int)($params['cookie']->id_lang);
		$maxdepth = Configuration::get('MAOCATEG_MAXDEPTH');

		if (!$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->ExecuteS('
			SELECT c.id_parent, c.id_category, cl.name, cl.description, cl.link_rewrite
			FROM `'._DB_PREFIX_.'category` c
			LEFT JOIN `'._DB_PREFIX_.'category_lang` cl ON (c.`id_category` = cl.`id_category` AND `id_lang` = '.$id_lang.')
			LEFT JOIN `'._DB_PREFIX_.'category_group` cg ON (cg.`id_category` = c.`id_category`)
			WHERE (c.`active` = 1 OR c.`id_category` = 1)
			'.((int)($maxdepth) != 0 ? ' AND `level_depth` <= '.(int)($maxdepth) : '').'
			AND cg.`id_group` IN ('.pSQL($groups).')
			GROUP BY id_category
			ORDER BY `level_depth` ASC, c.`position` ASC')
		)
			return;
	
		$resultParents = array();
		$resultIds = array();
		
		foreach ($result AS $row)
		{
			$resultParents[$row['id_parent']][] = $row;
			$resultIds[$row['id_category']] = $row;
		}
		$blockCategTree = $this->getTree($resultParents, $resultIds, $maxdepth);
		unset($resultParents);
		unset($resultIds);
				
		if (Tools::isSubmit('id_category'))
		{
			$cookie->last_visited_category = $id_category;
			$smarty->assign('maoblockcurrentCategoryId', $cookie->last_visited_category);
		}
		if (Tools::isSubmit('id_product'))
		{
			if (!isset($cookie->last_visited_category) OR !Product::idIsOnCategoryId($id_product, array('0' => array('id_category' => $cookie->last_visited_category))))
			{
				$product = new Product($id_product);
				if (isset($product) AND Validate::isLoadedObject($product))
					$cookie->last_visited_category = (int)($product->id_category_default);
			}
			$smarty->assign('maoblockcurrentCategoryId', (int)($cookie->last_visited_category));
		}

		$homecategories = array();
		$homecategoriesID = array();
		
		$homecategories = Category::getHomeCategories($id_lang);
		foreach ($homecategories AS $row)
			$homecategoriesID[] = $row['id_category'];
		
		$smarty->assign(array(
         'maoblockcategoriesID' => $homecategoriesID,
			'maoblockCategTree' => $blockCategTree,
			'maoblockcategories_rootarrow' => (int)(Configuration::get('MAOCATEG_ROOTARROW')) == 1 ? true : false,
			'maobranche_tpl_path' => _PS_MODULE_DIR_.'maofree_blockcategories/category-tree-branch.tpl'
		));
		
		return $this->display(__FILE__, 'maofree_blockcategories.tpl');
	}
	
	public function hookHeader($params)
	{
		Tools::addCSS(($this->_path).'css/menu-vertical.css', 'all');
		Tools::addCSS(($this->_path).'css/menu-vertical_css.php', 'all');
      
		return $this->display(__FILE__, 'header.tpl');
	}	
}