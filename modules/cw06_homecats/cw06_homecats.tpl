
	{if isset($subcategories)}
	<h2>Nos catégories</h2>
		<!-- Subcategories -->
		<div id="subcategories">
			<ul class="inline_list">
			{foreach from=$subcategories item=subcategory}
				<li>
					
						{if $subcategory.id_image}
							<a href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'htmlall':'UTF-8'}" title="{$subcategory.name|escape:'htmlall':'UTF-8'}">
							<img width="139" height="139" src="{$link->getCatImageLink($subcategory.link_rewrite, $subcategory.id_image,'large')}" alt="" />
							</a>
						{/if}
					<br />
					<a href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'htmlall':'UTF-8'}">{$subcategory.name|escape:'htmlall':'UTF-8'}</a>
				</li>
			{/foreach}
			</ul>
			<br class="clear"/>
		</div>
		
	{/if}
