<?php /* Smarty version Smarty-3.1.19, created on 2017-12-10 12:05:10
         compiled from "W:\domains\prestashop.loc\themes\leo_hitechgame\modules\leomanagewidgets\views\widgets\displayfooter\widget_twitter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:303255a2cf8c66905e1-21592672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3756fd4abc35e675b5ec6a26e4d6f644fedadacc' => 
    array (
      0 => 'W:\\domains\\prestashop.loc\\themes\\leo_hitechgame\\modules\\leomanagewidgets\\views\\widgets\\displayfooter\\widget_twitter.tpl',
      1 => 1512896575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303255a2cf8c66905e1-21592672',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'widget_heading' => 0,
    'twidget_id' => 0,
    'theme' => 0,
    'link_color' => 0,
    'chrome' => 0,
    'border_color' => 0,
    'iso_code' => 0,
    'count' => 0,
    'show_replies' => 0,
    'js' => 0,
    'show_scrollbar' => 0,
    'height' => 0,
    'text_color' => 0,
    'mail_color' => 0,
    'name_color' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a2cf8c66ee201_87703377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2cf8c66ee201_87703377')) {function content_5a2cf8c66ee201_87703377($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {?>
<div class="widget-twitter block nobackground">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">
		<div id="leo-twitter<?php echo $_smarty_tpl->tpl_vars['twidget_id']->value;?>
" class="leo-twitter">
			<a class="twitter-timeline" data-dnt="true" data-theme="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
" data-link-color="<?php echo $_smarty_tpl->tpl_vars['link_color']->value;?>
" data-chrome="<?php echo $_smarty_tpl->tpl_vars['chrome']->value;?>
" data-border-color="<?php echo $_smarty_tpl->tpl_vars['border_color']->value;?>
" lang="<?php echo $_smarty_tpl->tpl_vars['iso_code']->value;?>
" data-tweet-limit="<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" data-show-replies="<?php echo $_smarty_tpl->tpl_vars['show_replies']->value;?>
" href="https://twitter.com/<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" data-widget-id="<?php echo $_smarty_tpl->tpl_vars['twidget_id']->value;?>
">Tweets by @<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a>
			<?php echo $_smarty_tpl->tpl_vars['js']->value;?>

		</div>	
	</div>
</div>
<?php }?> 
<script type="text/javascript">

// Customize twitter feed
var hideTwitterAttempts = 0;
function hideTwitterBoxElements() {
 setTimeout( function() {
  if ( $('[id*=leo-twitter<?php echo $_smarty_tpl->tpl_vars['twidget_id']->value;?>
]').length ) {
   $('#leo-twitter<?php echo $_smarty_tpl->tpl_vars['twidget_id']->value;?>
 iframe').each( function(){
    var ibody = $(this).contents().find( 'body' );
	var show_scroll =  <?php echo $_smarty_tpl->tpl_vars['show_scrollbar']->value;?>
; 
	var height =  <?php echo $_smarty_tpl->tpl_vars['height']->value;?>
+'px'; 
    if ( ibody.find( '.timeline .stream .h-feed li.tweet' ).length ) {
		ibody.find( '.e-entry-title' ).css( 'color', '<?php echo $_smarty_tpl->tpl_vars['text_color']->value;?>
' );
		ibody.find( '.header .p-nickname' ).css( 'color', '<?php echo $_smarty_tpl->tpl_vars['mail_color']->value;?>
' );
		ibody.find( '.p-name' ).css( 'color', '<?php echo $_smarty_tpl->tpl_vars['name_color']->value;?>
' );
		if(show_scroll == 1){
			ibody.find( '.timeline .stream' ).css( 'max-height', height );
			ibody.find( '.timeline .stream' ).css( 'overflow-y', 'auto' );	
			ibody.find( '.timeline .twitter-timeline' ).css( 'height', 'inherit !important' );	
		}
    } else {
     $(this).hide();
    }
   });
  }
  hideTwitterAttempts++;
  if ( hideTwitterAttempts < 3 ) {
   hideTwitterBoxElements();
  }
 }, 1500);
}
// somewhere in your code after html page load
hideTwitterBoxElements();

</script>
<?php }} ?>
