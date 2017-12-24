<div class="block">
	<h4><a href="{$maoblockCategTree.link}">{l s='Categories' mod='maofree_blockcategories'}</a></h4>
	<div id="mao_blockcategories" class="block_content">
		<ul class="maomenu-vertical">
		{foreach from=$maoblockCategTree.children item=child name=maoblockCategTree}
			{if $smarty.foreach.maoblockCategTree.last}
				{include file="$maobranche_tpl_path" node=$child last='true'}
			{else}
				{include file="$maobranche_tpl_path" node=$child}
			{/if}
		{/foreach}
		</ul>
	</div>
</div>
