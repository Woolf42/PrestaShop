<?php /*%%SmartyHeaderCode:26335a2cf8c4c31693-83144391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00ea567d859f54f2c2bb3efca050e7aad2a2620a' => 
    array (
      0 => 'W:\\domains\\prestashop.loc\\themes\\leo_hitechgame\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1512896574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26335a2cf8c4c31693-83144391',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a35fceb896942_02440964',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a35fceb896942_02440964')) {function content_5a35fceb896942_02440964($_smarty_tpl) {?>
 
<!-- Block search module TOP -->
<div id="search_block_top" class="popup-over pull-right e-translate-down">
	<div class="popup-title"><span class="fa fa-search"></span></div>
	<form id="searchbox" method="get" action="http://prestashop.loc/search" class="popup-content"> 
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Поиск" value="" />
		<button type="submit" name="submit_search" class="btn fa fa-search"></button> 
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
