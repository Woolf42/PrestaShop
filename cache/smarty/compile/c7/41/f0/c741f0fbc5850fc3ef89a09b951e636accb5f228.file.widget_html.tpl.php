<?php /* Smarty version Smarty-3.1.19, created on 2017-12-10 12:05:10
         compiled from "W:\domains\prestashop.loc\themes\leo_hitechgame\modules\leomanagewidgets\views\widgets\displayfooter\widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102385a2cf8c64dec00-35086589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c741f0fbc5850fc3ef89a09b951e636accb5f228' => 
    array (
      0 => 'W:\\domains\\prestashop.loc\\themes\\leo_hitechgame\\modules\\leomanagewidgets\\views\\widgets\\displayfooter\\widget_html.tpl',
      1 => 1512896575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102385a2cf8c64dec00-35086589',
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
  'unifunc' => 'content_5a2cf8c64fe009_40382394',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2cf8c64fe009_40382394')) {function content_5a2cf8c64fe009_40382394($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html block footer-block block nobackground">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content toggle-footer">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
