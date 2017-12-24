<?php /* Smarty version Smarty-3.1.19, created on 2017-12-10 12:05:10
         compiled from "W:\domains\prestashop.loc\themes\leo_hitechgame\modules\blocksocial\blocksocial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70075a2cf8c651d414-47767113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4661f0650d99944aa1f0cfa745f1634991ebfd7' => 
    array (
      0 => 'W:\\domains\\prestashop.loc\\themes\\leo_hitechgame\\modules\\blocksocial\\blocksocial.tpl',
      1 => 1512896574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70075a2cf8c651d414-47767113',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
    'youtube_url' => 0,
    'google_plus_url' => 0,
    'pinterest_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a2cf8c65a9e35_26628198',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2cf8c65a9e35_26628198')) {function content_5a2cf8c65a9e35_26628198($_smarty_tpl) {?>

<div id="social_block" class="block nobackground">
	 <h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Get social','mod'=>'blocksocial'),$_smarty_tpl);?>
</h4>
	 <div class="block_content">	 	
		<ul>
			<?php if ($_smarty_tpl->tpl_vars['facebook_url']->value!='') {?>
				<li class="facebook">
					<a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebook_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn-tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'blocksocial'),$_smarty_tpl);?>
">
						<span><?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
					</a>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['twitter_url']->value!='') {?>
				<li class="twitter">
					<a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['twitter_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn-tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'blocksocial'),$_smarty_tpl);?>
">
						<span><?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
					</a>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['rss_url']->value!='') {?>
				<li class="rss">
					<a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rss_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn-tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'RSS','mod'=>'blocksocial'),$_smarty_tpl);?>
">
						<span><?php echo smartyTranslate(array('s'=>'RSS','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
					</a>
				</li>
			<?php }?>
	        <?php if ($_smarty_tpl->tpl_vars['youtube_url']->value!='') {?>
	        	<li class="youtube">
	        		<a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['youtube_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn-tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Youtube','mod'=>'blocksocial'),$_smarty_tpl);?>
">
	        			<span><?php echo smartyTranslate(array('s'=>'Youtube','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
	        		</a>
	        	</li>
	        <?php }?>
	        <?php if ($_smarty_tpl->tpl_vars['google_plus_url']->value!='') {?>
	        	<li class="google-plus">
	        		<a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['google_plus_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn-tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Google Plus','mod'=>'blocksocial'),$_smarty_tpl);?>
">
	        			<span><?php echo smartyTranslate(array('s'=>'Google Plus','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
	        		</a>
	        	</li>
	        <?php }?>
	        <?php if ($_smarty_tpl->tpl_vars['pinterest_url']->value!='') {?>
	        	<li class="pinterest">
	        		<a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pinterest_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn-tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Pinterest','mod'=>'blocksocial'),$_smarty_tpl);?>
">
	        			<span><?php echo smartyTranslate(array('s'=>'Pinterest','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
	        		</a>
	        	</li>
	        <?php }?>
		</ul>
	 </div>
</div>

<?php }} ?>
