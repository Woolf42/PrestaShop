<div class="footer_stuffs" style="height:100px; overflow:hidden">
{if isset($products) AND $products}
{assign var='liHeight' value=360}
{assign var='nbItemsPerLine' value=4}
{assign var='nbLi' value=$products|@count}
{assign var='nbLines' value=$nbLi/$nbItemsPerLine|ceil}
{assign var='ulHeight' value=$nbLines*$liHeight}
 <h4>
   <strong>{l s='Specials' mod='promotions'}</strong>
   <a href="{$base_dir}prices-drop.php">+ {l s='See more' mod='promotions'}</a>
 </h4>
{foreach from=$products item=product name=promotionsProducts}
<li class="ajax_block_product {if $smarty.foreach.promotionsProducts.first}first_item{elseif $smarty.foreach.promotionsProducts.last}last_item{else}item{/if} {if $smarty.foreach.promotionsProducts.iteration%$nbItemsPerLine == 0}last_item_of_line{elseif $smarty.foreach.promotionsProducts.iteration%$nbItemsPerLine == 1}first_item_of_line{/if} {if $smarty.foreach.promotionsProducts.iteration > ($smarty.foreach.promotionsProducts.total - ($smarty.foreach.promotionsProducts.total % $nbItemsPerLine))}last_line{/if}">
<p class="linked_img">
<a href="{$product.link}" title="{$product.legend|escape:htmlall:'UTF-8'}"><img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'medium')}" height="60" width="60" alt="{$product.legend|escape:htmlall:'UTF-8'}" /></a>
</p>
</li>
{/foreach}
{else}
<p>{l s='No specials' mod='promotions'}</p>
{/if}
</div>
<!-- /MODULE Promotions -->

