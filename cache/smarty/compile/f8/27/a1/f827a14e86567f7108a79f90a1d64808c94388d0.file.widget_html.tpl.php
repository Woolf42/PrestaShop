<?php /* Smarty version Smarty-3.1.19, created on 2017-12-10 12:05:09
         compiled from "W:\domains\prestashop.loc\modules\leomanagewidgets\views\widgets\widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:312705a2cf8c5aa32c6-28111886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f827a14e86567f7108a79f90a1d64808c94388d0' => 
    array (
      0 => 'W:\\domains\\prestashop.loc\\modules\\leomanagewidgets\\views\\widgets\\widget_html.tpl',
      1 => 1512896576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '312705a2cf8c5aa32c6-28111886',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a2cf8c5ac26d3_85226394',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2cf8c5ac26d3_85226394')) {function content_5a2cf8c5ac26d3_85226394($_smarty_tpl) {?>
 
 <?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
