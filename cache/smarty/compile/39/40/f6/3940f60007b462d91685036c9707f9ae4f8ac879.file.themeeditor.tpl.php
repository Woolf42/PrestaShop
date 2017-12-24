<?php /* Smarty version Smarty-3.1.19, created on 2017-12-10 12:19:18
         compiled from "W:\domains\prestashop.loc\modules\leotempcp\views\templates\admin\leotempcp_theme\themeeditor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181995a2cfc168865c8-81397422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3940f60007b462d91685036c9707f9ae4f8ac879' => 
    array (
      0 => 'W:\\domains\\prestashop.loc\\modules\\leotempcp\\views\\templates\\admin\\leotempcp_theme\\themeeditor.tpl',
      1 => 1512896576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181995a2cfc168865c8-81397422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actionURL' => 0,
    'themeName' => 0,
    'backLink' => 0,
    'profiles' => 0,
    'profile' => 0,
    'imgLink' => 0,
    'xmlselectors' => 0,
    'for' => 0,
    'items' => 0,
    'group' => 0,
    'item' => 0,
    'patterns' => 0,
    'backgroundImageURL' => 0,
    'pattern' => 0,
    'backGroundValue' => 0,
    'attachment' => 0,
    'position' => 0,
    'repeat' => 0,
    'i' => 0,
    'siteURL' => 0,
    'customizeFolderURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a2cfc16ac49d0_48022971',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2cfc16ac49d0_48022971')) {function content_5a2cfc16ac49d0_48022971($_smarty_tpl) {?> <div id="livethemeeditor">
    <form  enctype="multipart/form-data" action="<?php echo $_smarty_tpl->tpl_vars['actionURL']->value;?>
" id="form" method="post">
        <div id="leo-customize" class="leo-customize">
            <div class="btn-show"><?php echo smartyTranslate(array('s'=>'Customize'),$_smarty_tpl);?>
<span class="icon-wrench"></span></div>
            <div class="wrapper"><div id="customize-form">
                    <p>  
                        <span class="badge"><?php echo smartyTranslate(array('s'=>'Theme','mod'=>'leotempcp'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['themeName']->value;?>
</span>   <a class="label label-default pull-right" href="<?php echo $_smarty_tpl->tpl_vars['backLink']->value;?>
"><?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
</a>  
                    </p>        

                    <div class="buttons-group">
                        <input type="hidden" id="action-mode" name="action-mode">   
                        <a onclick="$('#action-mode').val('save-edit');
                                $('#form').submit();" class="btn btn-primary btn-xs" href="#" type="submit"><?php echo smartyTranslate(array('s'=>'Submit'),$_smarty_tpl);?>
</a>
                        <a onclick="$('#action-mode').val('save-delete');
                                $('#form').submit();" class="btn btn-danger btn-xs show-for-existed" href="#" type="submit"><?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
</a>
                    </div>
                    <hr>
                    <div class="groups">
                        <div class="form-group clearfix">
                            <label><?php echo smartyTranslate(array('s'=>'Edit for'),$_smarty_tpl);?>
</label> 
                            <select id="saved-files" name="saved_file" class="form-control">
                                <option value=""><?php echo smartyTranslate(array('s'=>'create new'),$_smarty_tpl);?>
</option>
                                <?php  $_smarty_tpl->tpl_vars['profile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profile']->key => $_smarty_tpl->tpl_vars['profile']->value) {
$_smarty_tpl->tpl_vars['profile']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
</option>
                                <?php } ?>
                            </select> 
                        </div>
                        <div class="form-group clearfix">
                            <label class="show-for-notexisted pull-left"><?php echo smartyTranslate(array('s'=>'Or  Save New','mod'=>'leotempcp'),$_smarty_tpl);?>
&nbsp;&nbsp;&nbsp;</label><label class="show-for-existed"><?php echo smartyTranslate(array('s'=>'And Rename File To'),$_smarty_tpl);?>
</label>
                            <input type="text" name="newfile">
                        </div>  
                        <div class="form-group clearfix">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['imgLink']->value;?>
" class="btn btn btn-default btn-xs" id="upload_pattern"><?php echo smartyTranslate(array('s'=>'Upload other pattern'),$_smarty_tpl);?>
</a>
                        </div>
                    <hr>
                        <div class="clearfix" id="customize-body">
                            <ul id="myCustomTab" class="nav nav-tabs">
                                <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['for'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['xmlselectors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value) {
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['for']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
                                    <li><a href="#tab-<?php echo $_smarty_tpl->tpl_vars['for']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['for']->value;?>
</a></li> 
                                    <?php } ?>  
                            </ul>
                            <div class="tab-content" > 
                                <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['for'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['xmlselectors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['for']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
                                    <div class="tab-pane" id="tab-<?php echo $_smarty_tpl->tpl_vars['for']->value;?>
">

                                        <?php if (!empty($_smarty_tpl->tpl_vars['items']->value)) {?>
                                            <div class="accordion"  id="custom-accordion">
                                                <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
                                                    <div class="accordion-group panel panel-default">
                                                        <div class="accordion-heading panel-heading">
                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#custom-accordion" href="#collapse<?php echo $_smarty_tpl->tpl_vars['group']->value['match'];?>
">
                                                                <?php echo $_smarty_tpl->tpl_vars['group']->value['header'];?>
  
                                                            </a>
                                                        </div>

                                                        <div id="collapse<?php echo $_smarty_tpl->tpl_vars['group']->value['match'];?>
" class="accordion-body collapse">
                                                            <div class="accordion-inner panel-body clearfix">
                                                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['selector']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

                                                                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['type'])&&$_smarty_tpl->tpl_vars['item']->value['type']=="image") {?> 
                                                                        <div class="form-group background-images cleafix"> 
                                                                            <label><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</label>
                                                                            <a class="clear-bg label label-success" href="#"><?php echo smartyTranslate(array('s'=>'Clear'),$_smarty_tpl);?>
</a>
                                                                            <input value="" type="hidden" name="customize[<?php echo $_smarty_tpl->tpl_vars['group']->value['match'];?>
][]" data-match="<?php echo $_smarty_tpl->tpl_vars['group']->value['match'];?>
" class="input-setting" data-selector="<?php echo $_smarty_tpl->tpl_vars['item']->value['selector'];?>
" data-attrs="background-image">

                                                                            <div class="clearfix"></div>
                                                                            <p><em style="font-size:10px"><?php echo smartyTranslate(array('s'=>'Those Images in folder YOURTHEME/img/patterns/'),$_smarty_tpl);?>
</em></p>
                                                                            <div class="bi-wrapper clearfix">
                                                                                <?php  $_smarty_tpl->tpl_vars['pattern'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pattern']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['patterns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pattern']->key => $_smarty_tpl->tpl_vars['pattern']->value) {
$_smarty_tpl->tpl_vars['pattern']->_loop = true;
?>
                                                                                    <div style="background:url('<?php echo $_smarty_tpl->tpl_vars['backgroundImageURL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['pattern']->value;?>
') no-repeat center center;" class="pull-left" data-image="<?php echo $_smarty_tpl->tpl_vars['backgroundImageURL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['pattern']->value;?>
" data-val="../../img/patterns/<?php echo $_smarty_tpl->tpl_vars['pattern']->value;?>
">

                                                                                    </div>
                                                                                <?php } ?>
                                                                            </div>
                                                                            <ul class="bg-config">
                                                                                <li>
                                                                                    <div><?php echo smartyTranslate(array('s'=>'Attachment'),$_smarty_tpl);?>
</div>
                                                                                    <select data-attrs="background-attachment" name="customize[<?php echo $_smarty_tpl->tpl_vars['group']->value['match'];?>
][]" data-selector="<?php echo $_smarty_tpl->tpl_vars['item']->value['selector'];?>
" data-match="<?php echo $_smarty_tpl->tpl_vars['group']->value['match'];?>
">
                                                                                        <option value=""><?php echo smartyTranslate(array('s'=>'Not set'),$_smarty_tpl);?>
</option>
                                                                                        <?php  $_smarty_tpl->tpl_vars['attachment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attachment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backGroundValue']->value['attachment']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->key => $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->_loop = true;
?>
                                                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['attachment']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['attachment']->value;?>
</option>
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </li>
                                                                                <li>
                                                                                    <div><?php echo smartyTranslate(array('s'=>'Position'),$_smarty_tpl);?>
</div>
                                                                                    <select data-attrs="background-position" name="customize[<?php echo $_smarty_tpl->tpl_vars['group']->value['match'];?>
][]" data-selector="<?php echo $_smarty_tpl->tpl_vars['item']->value['selector'];?>
" data-match="<?php echo $_smarty_tpl->tpl_vars['group']->value['match'];?>
">
                                                                                        <option value=""><?php echo smartyTranslate(array('s'=>'Not set'),$_smarty_tpl);?>
</option>
                                                                                        <?php  $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['position']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backGroundValue']->value['position']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['position']->key => $_smarty_tpl->tpl_vars['position']->value) {
$_smarty_tpl->tpl_vars['position']->_loop = true;
?>
                                                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['position']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['position']->value;?>
</option>
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </li>
                                                                                <li>
                                                                                    <div><?php echo smartyTranslate(array('s'=>'Repeat'),$_smarty_tpl);?>
</div>
                                                                                    <select data-attrs="background-repeat" name="customize[<?php echo $_smarty_tpl->tpl_vars['group']->value['match'];?>
][]" data-selector="<?php echo $_smarty_tpl->tpl_vars['item']->value['selector'];?>
" data-match="<?php echo $_smarty_tpl->tpl_vars['group']->value['match'];?>
">
                                                                                        <option value=""><?php echo smartyTranslate(array('s'=>'Not set'),$_smarty_tpl);?>
</option>
                                                                                        <?php  $_smarty_tpl->tpl_vars['repeat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['repeat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backGroundValue']->value['repeat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['repeat']->key => $_smarty_tpl->tpl_vars['repeat']->value) {
$_smarty_tpl->tpl_vars['repeat']->_loop = true;
?>
                                                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['repeat']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['repeat']->value;?>
</option>
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']=="fontsize") {?>
                                                                        <div class="form-group cleafix">
                                                                            <label><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</label>
                                                                            <select name="customize[<?php echo $_smarty_tpl->tpl_vars['group']->value['match'];?>
][]" data-match="<?php echo $_smarty_tpl->tpl_vars['group']->value['match'];?>
" type="text" class="input-setting" data-selector="<?php echo $_smarty_tpl->tpl_vars['item']->value['selector'];?>
" data-attrs="<?php echo $_smarty_tpl->tpl_vars['item']->value['attrs'];?>
">
                                                                                <option value="">Inherit</option>
                                                                                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 16+1 - (9) : 9-(16)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 9, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                                                                <?php }} ?>
                                                                            </select>   <a href="#" class="clear-bg label label-success"><?php echo smartyTranslate(array('s'=>'Clear'),$_smarty_tpl);?>
</a>
                                                                        </div>
                                                                    <?php } else { ?>
                                                                        <div class="form-group cleafix">
                                                                            <label><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</label>
                                                                            <input value="" size="10" name="customize[<?php echo $_smarty_tpl->tpl_vars['group']->value['match'];?>
][]" data-match="<?php echo $_smarty_tpl->tpl_vars['group']->value['match'];?>
" type="text" class="input-setting" data-selector="<?php echo $_smarty_tpl->tpl_vars['item']->value['selector'];?>
" data-attrs="<?php echo $_smarty_tpl->tpl_vars['item']->value['attrs'];?>
"><a href="#" class="clear-bg label label-success"><?php echo smartyTranslate(array('s'=>'Clear'),$_smarty_tpl);?>
</a>
                                                                        </div>
                                                                    <?php }?>


                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>              
                                                <?php } ?>
                                            </div>
                                        <?php }?>
                                    </div>
                                <?php } ?>
                            </div>      
                        </div>    
                    </div>
                </div></div></div>
    </form>
    <div id="main-preview">
        <iframe src="<?php echo $_smarty_tpl->tpl_vars['siteURL']->value;?>
" ></iframe> 
    </div>
</div>
        <script>
        var customizeFolderURL = '<?php echo $_smarty_tpl->tpl_vars['customizeFolderURL']->value;?>
';
        </script><?php }} ?>
