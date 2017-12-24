<?php /* Smarty version Smarty-3.1.19, created on 2017-12-17 08:35:48
         compiled from "W:\domains\prestashop.loc\admin9016utrp5\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:252995a36023406a388-76439005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79100e7cd9f3b9ea0ad80c619aade7b1625f2c25' => 
    array (
      0 => 'W:\\domains\\prestashop.loc\\admin9016utrp5\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1504497462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252995a36023406a388-76439005',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a360234085917_93565894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a360234085917_93565894')) {function content_5a360234085917_93565894($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
