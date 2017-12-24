<li class="{if isset($last) && $last eq 'true'}last {/if}{if isset($maoblockcurrentCategoryId) && ($node.id eq $maoblockcurrentCategoryId)}selected-maoblockcategories{/if}">
	<a href="{$node.link}" {if isset($maoblockcurrentCategoryId) && ($node.id eq $maoblockcurrentCategoryId)}class="selected-a-maoblockcategories"{/if} title="{$node.desc|escape:html:'UTF-8'}">{$node.name|escape:html:'UTF-8'}{if $node.children|@count > 0}{assign var=foo value='eee'}{foreach from=$maoblockcategoriesID item=number}{if $node.id eq $number}{assign var=foo value='aaa'}{/if}{/foreach}{if !$maoblockcategories_rootarrow && ($foo eq 'aaa')}{else}<span class="arrow-maoblockcategories"></span>{/if}{/if}</a>
	{if $node.children|@count > 0}
		<ul>
			{foreach from=$node.children item=child name=maocategoryTreeBranch}
				{if isset($smarty.foreach.maocategoryTreeBranch) && $smarty.foreach.maocategoryTreeBranch.last}
					{include file="$maobranche_tpl_path" node=$child last='true'}
				{else}
					{include file="$maobranche_tpl_path" node=$child last='false'}
				{/if}
			{/foreach}
		</ul>
	{/if}
</li>