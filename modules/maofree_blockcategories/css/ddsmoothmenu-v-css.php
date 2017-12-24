<?php
require_once dirname(__FILE__) . '/../../../config/config.inc.php';
require_once dirname(__FILE__) . '/../../../init.php';

$maoblockcategcolorhoverroot = Configuration::get('MAOBLOCKCATEG_COLORHOVERROOT');
$maoblockcategcolorroot = Configuration::get('MAOBLOCKCATEG_COLORROOT');
$maoblockcategcolorhoverbranch = Configuration::get('MAOBLOCKCATEG_COLORHOVERBRANCH');
$maoblockcategcolorbranch = Configuration::get('MAOBLOCKCATEG_COLORBRANCH');
$maoblockcategcolorhoverselroot = Configuration::get('MAOBLOCKCATEG_COLORHOVERSELROOT');
$maoblockcategcolorselroot = Configuration::get('MAOBLOCKCATEG_COLORSELROOT');
$maoblockcategcolorhoverselbranch = Configuration::get('MAOBLOCKCATEG_COLORHOVERSELBRAN');
$maoblockcategcolorselbranch = Configuration::get('MAOBLOCKCATEG_COLORSELBRANCH');

header('Content-type: text/css; charset=utf-8;');

echo '.ddsmoothmenu-v ul li a.rootmaoblockcategories:link, .ddsmoothmenu-v ul li a.rootmaoblockcategories:visited {
	background-color: #' . $maoblockcategcolorroot . '; /*background of menu items (default state)*/
}' . "\n";

echo '.ddsmoothmenu-v ul li a.rootmaoblockcategories:hover, .ddsmoothmenu-v ul li a.rootmaoblockcategories:active, .ddsmoothmenu-v ul li a.rootmaoblockcategories:focus {
	background-color: #' . $maoblockcategcolorhoverroot . '; /*background of menu items during onmouseover (hover state)*/
	text-decoration: none;
}' . "\n";

echo '.ddsmoothmenu-v ul li a.maoblockcategories:link, .ddsmoothmenu-v ul li a.maoblockcategories:visited {
	background-color: #' . $maoblockcategcolorbranch . '; /*background of menu items (default state)*/
}' . "\n";

echo '.ddsmoothmenu-v ul li a.maoblockcategories:hover, .ddsmoothmenu-v ul li a.maoblockcategories:active, .ddsmoothmenu-v ul li a.maoblockcategories:focus {
	background-color: #' . $maoblockcategcolorhoverbranch . '; /*background of menu items during onmouseover (hover state)*/
	text-decoration: none;
}' . "\n";

echo '.ddsmoothmenu-v ul li a.selected-category { /*CSS class that is dynamically added to the currently active menu items LI A element*/
	background-color: #' . $maoblockcategcolorselbranch . '; 
}' . "\n";

echo '.ddsmoothmenu-v ul li a.selected-category:hover { /*CSS class that is dynamically added to the currently active menu items LI A element during onmouseover (hover state)*/
	background-color: #' . $maoblockcategcolorhoverselbranch . ';
	text-decoration: none;
}' . "\n";

echo '.ddsmoothmenu-v ul li a.rootselected-category { /*CSS class that is dynamically added to the currently active menu items LI A element*/
	background-color: #' . $maoblockcategcolorselroot . '; 
}' . "\n";

echo '.ddsmoothmenu-v ul li a.rootselected-category:hover { /*CSS class that is dynamically added to the currently active menu items LI A element during onmouseover (hover state)*/
	background-color: #' . $maoblockcategcolorhoverselroot . ';
	text-decoration: none;
}' . "\n";