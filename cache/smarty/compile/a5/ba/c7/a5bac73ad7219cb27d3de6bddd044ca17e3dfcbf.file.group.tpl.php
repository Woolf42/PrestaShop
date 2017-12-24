<?php /* Smarty version Smarty-3.1.19, created on 2017-12-10 12:05:08
         compiled from "W:\domains\prestashop.loc\modules\leomanagewidgets\views\widgets\group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203025a2cf8c4c7f8a6-79707155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5bac73ad7219cb27d3de6bddd044ca17e3dfcbf' => 
    array (
      0 => 'W:\\domains\\prestashop.loc\\modules\\leomanagewidgets\\views\\widgets\\group.tpl',
      1 => 1512896576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203025a2cf8c4c7f8a6-79707155',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'leoGroup' => 0,
    'group' => 0,
    'LEO_BG_STYLE_DATA' => 0,
    'column' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a2cf8c4d527d1_24898989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2cf8c4d527d1_24898989')) {function content_5a2cf8c4d527d1_24898989($_smarty_tpl) {?>
 
<?php if (isset($_smarty_tpl->tpl_vars['leoGroup']->value)&&$_smarty_tpl->tpl_vars['leoGroup']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leoGroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
        <div class="<?php if (isset($_smarty_tpl->tpl_vars['group']->value['class'])&&$_smarty_tpl->tpl_vars['group']->value['class']) {?><?php echo $_smarty_tpl->tpl_vars['group']->value['class'];?>
<?php }?>" 
            <?php if (isset($_smarty_tpl->tpl_vars['LEO_BG_STYLE_DATA']->value[$_smarty_tpl->tpl_vars['group']->value['id']]['background_image_html'])&&$_smarty_tpl->tpl_vars['LEO_BG_STYLE_DATA']->value[$_smarty_tpl->tpl_vars['group']->value['id']]['background_image_html']!='') {?>
                <?php echo $_smarty_tpl->tpl_vars['LEO_BG_STYLE_DATA']->value[$_smarty_tpl->tpl_vars['group']->value['id']]['background_image_html'];?>

            <?php }?>
        >
            <?php if (isset($_smarty_tpl->tpl_vars['LEO_BG_STYLE_DATA']->value[$_smarty_tpl->tpl_vars['group']->value['id']]['background_video_html'])&&$_smarty_tpl->tpl_vars['LEO_BG_STYLE_DATA']->value[$_smarty_tpl->tpl_vars['group']->value['id']]['background_video_html']!='') {?>
                <?php echo $_smarty_tpl->tpl_vars['LEO_BG_STYLE_DATA']->value[$_smarty_tpl->tpl_vars['group']->value['id']]['background_video_html'];?>

            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['group']->value['title'])&&$_smarty_tpl->tpl_vars['group']->value['title']) {?>
                <h4 class="title_block"><?php echo $_smarty_tpl->tpl_vars['group']->value['title'];?>
</h4>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['group']->value['columns'])&&$_smarty_tpl->tpl_vars['group']->value['columns']) {?>
                <?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['columns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['column']->value['active']) {?>
                        <div class="widget<?php echo $_smarty_tpl->tpl_vars['column']->value['col_value'];?>
<?php if (isset($_smarty_tpl->tpl_vars['column']->value['class'])&&$_smarty_tpl->tpl_vars['column']->value['class']) {?> <?php echo $_smarty_tpl->tpl_vars['column']->value['class'];?>
<?php }?>"
                            <?php if (isset($_smarty_tpl->tpl_vars['column']->value['background'])&&$_smarty_tpl->tpl_vars['column']->value['background']) {?>style="background-color: <?php echo $_smarty_tpl->tpl_vars['column']->value['background'];?>
"<?php }?>>
                            <?php if (isset($_smarty_tpl->tpl_vars['column']->value['rows'])) {?>
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['column']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['row']->value['content'])) {?><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
<?php }?>
                                <?php } ?>
                            <?php }?>
                        </div>
                    <?php }?>
                <?php } ?>
            <?php }?>
        </div>
    <?php } ?>
<?php }?><?php }} ?>
