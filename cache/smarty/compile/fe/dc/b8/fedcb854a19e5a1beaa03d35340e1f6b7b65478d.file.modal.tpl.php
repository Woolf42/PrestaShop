<?php /* Smarty version Smarty-3.1.19, created on 2017-12-10 12:04:39
         compiled from "W:\domains\prestashop.loc\admin9016utrp5\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:290555a2cf8a745ad15-36902467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fedcb854a19e5a1beaa03d35340e1f6b7b65478d' => 
    array (
      0 => 'W:\\domains\\prestashop.loc\\admin9016utrp5\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1504497462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290555a2cf8a745ad15-36902467',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a2cf8a7462a10_53231893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2cf8a7462a10_53231893')) {function content_5a2cf8a7462a10_53231893($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
