<?php
require_once dirname(__FILE__) . '/../../../config/config.inc.php';
require_once dirname(__FILE__) . '/../../../init.php';

$maoblockcateg_colorhoverroot = Configuration::get('MAOCATEG_COLORHOVERROOT');
$maoblockcateg_colorroot = Configuration::get('MAOCATEG_COLORROOT');
$maoblockcateg_colorhoverbranch = Configuration::get('MAOCATEG_COLORHOVERBRANCH');
$maoblockcateg_colorbranch = Configuration::get('MAOCATEG_COLORBRANCH');
$maoblockcateg_colorhoverselroot = Configuration::get('MAOCATEG_COLORHOVERSELROOT');
$maoblockcateg_colorselroot = Configuration::get('MAOCATEG_COLORSELROOT');
$maoblockcateg_colorhoverselbranch = Configuration::get('MAOCATEG_COLORHOVERSELBRAN');
$maoblockcateg_colorselbranch = Configuration::get('MAOCATEG_COLORSELBRANCH');
$maoblockcateg_arrowscolor = Configuration::get('MAOCATEG_ARROWSCOLOR');
$maoblockcateg_rootarrow = Configuration::get('MAOCATEG_ROOTARROW');
$maoblockcateg_rootbuttonheight = Configuration::get('MAOCATEG_ROOT_BUTTON_HEIGHT');
$maoblockcateg_branchheight = Configuration::get('MAOCATEG_BRANCH_HEIGHT');
$maoblockcateg_branchwidth = Configuration::get('MAOCATEG_BRANCH_WIDTH');
$maoblockcateg_paddingtextbutton = Configuration::get('MAOCATEG_PADDING_LEFT_ROOT');
$maoblockcateg_paddingtextbranch = Configuration::get('MAOCATEG_PADDING_LEFT_BRANCH');
$maoblockcateg_buttonfontsize = Configuration::get('MAOCATEG_ROOT_FONTSIZE');
$maoblockcateg_branchfontsize = Configuration::get('MAOCATEG_BRANCH_FONTSIZE');
$maoblockcateg_submenuborder = Configuration::get('MAOCATEG_SUBMENU_BORDER');
$maoblockcateg_distancerootbuttons = Configuration::get('MAOCATEG_DISTANCE_BUTTONS');
$maoblockcateg_theme = Configuration::get('MAOCATEG_THEME');
$maoblockcateg_opacity = Configuration::get('MAOCATEG_OPACITY');
$maoblockcateg_roottextcolor = Configuration::get('MAOCATEG_ROOTTEXTCOLOR');
$maoblockcateg_roothovertextcolor = Configuration::get('MAOCATEG_ROOTHOVERTEXTCOLOR');
$maoblockcateg_branchtextcolor = Configuration::get('MAOCATEG_BRANCHTEXTCOLOR');
$maoblockcateg_branchovertextcolor = Configuration::get('MAOCATEG_BRANCHOVERTEXTCOLOR');
$maoblockcateg_rootselectedtextcolor = Configuration::get('MAOCATEG_ROOTSELTEXTCOLOR');
$maoblockcateg_rootselectedhovertextcolor = Configuration::get('MAOCATEG_ROOTSELHTEXTCOLOR');
$maoblockcateg_branchselectedtextcolor = Configuration::get('MAOCATEG_BRANCHSELTEXTCOLOR');
$maoblockcateg_branchselectedhovertextcolor = Configuration::get('MAOCATEG_BRANCHSELHTEXTCOLOR');
$maoblockcateg_submenubordercolor = Configuration::get('MAOCATEG_SUBMENUBORDERCOLOR');

header('Content-type: text/css; charset=utf-8;');

echo 'ul.maomenu-vertical li { background: ' . ($maoblockcateg_theme != 'none' ? ('transparent url(../img/menu/' . $maoblockcateg_theme . '/button.gif) no-repeat') : '#' . $maoblockcateg_colorroot) . '; height: ' . $maoblockcateg_rootbuttonheight . 'px; line-height: ' . ($maoblockcateg_theme != 'none' ? ($maoblockcateg_rootbuttonheight - 2) : $maoblockcateg_rootbuttonheight) . 'px; margin-bottom: ' . $maoblockcateg_distancerootbuttons . 'px; }' . "\n";
echo 'ul.maomenu-vertical a, ul.maomenu-vertical a:visited, ul.maomenu-vertical a:link { text-decoration: none; color: #' . $maoblockcateg_roottextcolor . ' }' . "\n";
echo 'ul.maomenu-vertical li a { padding-left: ' . $maoblockcateg_paddingtextbutton . 'px; padding-right: 20px; font-size: ' . $maoblockcateg_buttonfontsize . 'px; }' . "\n";
echo 'ul.maomenu-vertical li:hover, ul.maomenu-vertical li.hover { background: ' . ($maoblockcateg_theme != 'none' ? ('transparent url(../img/menu/' . $maoblockcateg_theme . '/hover.gif) no-repeat') : '#' . $maoblockcateg_colorhoverroot) . ' }' . "\n";
echo 'ul.maomenu-vertical li:hover a, ul.maomenu-vertical a:focus, ul.maomenu-vertical a:hover, ul.maomenu-vertical a:active { color: #' . $maoblockcateg_roothovertextcolor . ' }' . "\n";
echo 'ul.maomenu-vertical ul { width: ' . $maoblockcateg_branchwidth . 'px; border: ' . $maoblockcateg_submenuborder . 'px solid #' . $maoblockcateg_submenubordercolor . '; }' . "\n";
echo 'ul.maomenu-vertical ul li { background: #' . $maoblockcateg_colorbranch . '; height: ' . $maoblockcateg_branchheight . 'px; line-height: ' . $maoblockcateg_branchheight . 'px; opacity: ' . $maoblockcateg_opacity . '; }' . "\n";
echo 'ul.maomenu-vertical ul li:hover, ul.maomenu-vertical ul li.hover { background: #' . $maoblockcateg_colorhoverbranch . ' }' . "\n";
echo 'ul.maomenu-vertical li:hover ul li a, ul.maomenu-vertical ul li a, ul.maomenu-vertical ul li a:visited, ul.maomenu-vertical ul li a:link { color: #' . $maoblockcateg_branchtextcolor . '; padding-left: ' . $maoblockcateg_paddingtextbranch . 'px; padding-right: 20px; font-size: ' . $maoblockcateg_branchfontsize . 'px }' . "\n";
echo 'ul.maomenu-vertical li:hover ul li a:hover { color: #' . $maoblockcateg_branchovertextcolor . ' }' . "\n";

echo 'ul.maomenu-vertical li a.selected-a-maoblockcategories { color: #' . $maoblockcateg_rootselectedtextcolor . ' }' . "\n";
echo 'ul.maomenu-vertical li.selected-maoblockcategories { background: ' . ($maoblockcateg_theme != 'none' ? ('transparent url(../img/menu/' . $maoblockcateg_theme . '/selected.gif) no-repeat') : '#' . $maoblockcateg_colorselroot) . ' }' . "\n";
echo 'ul.maomenu-vertical li.selected-maoblockcategories:hover { background: ' . ($maoblockcateg_theme != 'none' ? ('transparent url(../img/menu/' . $maoblockcateg_theme . '/hover-selected.gif) no-repeat') : '#' . $maoblockcateg_colorhoverselroot) . ' }' . "\n";
echo 'ul.maomenu-vertical li.selected-maoblockcategories:hover a.selected-a-maoblockcategories { color: #' . $maoblockcateg_rootselectedhovertextcolor . ' }' . "\n";
echo 'ul.maomenu-vertical li:hover ul li a.selected-a-maoblockcategories, ul.maomenu-vertical ul li a.selected-a-maoblockcategories:visited, ul.maomenu-vertical ul li a.selected-a-maoblockcategories:link { color: #' . $maoblockcateg_paddingtextbutton . '; }' . "\n";
echo 'ul.maomenu-vertical li:hover ul li.selected-maoblockcategories, ul.maomenu-vertical ul li.selected-maoblockcategories { background: #' . $maoblockcateg_colorselbranch . '; }' . "\n";
echo 'ul.maomenu-vertical li:hover ul li.selected-maoblockcategories:hover { background: #' . $maoblockcateg_colorhoverselbranch . '; }' . "\n";
echo 'ul.maomenu-vertical li:hover ul li a.selected-a-maoblockcategories:hover, ul.maomenu-vertical li:hover ul li.selected-maoblockcategories:hover a.selected-a-maoblockcategories { color: #' . $maoblockcateg_paddingtextbutton . '; }' . "\n";

if ($maoblockcateg_rootarrow) {
echo '
ul.maomenu-vertical span.arrow-maoblockcategories {
   background-image: ' . ($maoblockcateg_arrowscolor == 'black' ? 'url(../img/arrow/nav-arrow-right.png)' : 'url(../img/arrow/nav-arrow-right-white.png)') . ';
   background-position: 100% 50%;
   background-repeat: no-repeat;
   position: absolute;
   display:	block;
   right: 5px;
   top: ' . Configuration::get('MAOCATEG_TOP_ROOTARROW') . 'px;
   width: 12px;
   height: 15px;
}
' . "\n";
}

echo '
ul.maomenu-vertical ul span.arrow-maoblockcategories {   background-image: ' . ($maoblockcateg_arrowscolor == 'black' ? 'url(../img/arrow/nav-arrow-right.png)' : 'url(../img/arrow/nav-arrow-right-white.png)') . ';
   background-position: 100% 50%;
   background-repeat: no-repeat;
   position: absolute;
   display:	block;
   right: 5px;
   top: ' . Configuration::get('MAOCATEG_TOP_BRANCHARROW') . 'px;
   width: 12px;
   height: 15px;
}
' . "\n";

if ($maoblockcateg_theme == 'none') {
echo '
ul.maomenu-vertical li {
   border-radius: 5px;
   -moz-border-radius: 5px;
   -webkit-border-radius: 5px;
   -moz-box-shadow: 0 1px 3px #999;
   -webkit-box-shadow: 0 1px 3px #999;
   box-shadow: 0 1px 3px #999;
}
' . "\n";
}