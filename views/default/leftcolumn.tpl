<div id="leftColumn">
    <div class="menuCaption">Menu:</div>
    <ul>
        {foreach $rsCategories as $item}
            <li>
                {if isset($catId)}
                    {if $catId eq $item['id']}
                        <a href="/category/index/{$item['id']}" class="active">{$item['name']}</a>
                    {else}
                        <a href="/category/index/{$item['id']}">{$item['name']}</a>
                    {/if}
                {else}
                    <a href="/category/index/{$item['id']}">{$item['name']}</a>
                {/if}
                {if isset($item['children'])}
                    <ul>
                        {foreach $item['children'] as $itemChildren}
                            <li>
                                {if isset($catId)}
                                    {if $catId eq $itemChildren['id']}
                                        <a href="/category/index/{$itemChildren['id']}"
                                           class="active">{$itemChildren['name']}</a>
                                    {else}
                                        <a href="/category/index/{$itemChildren['id']}">{$itemChildren['name']}</a>
                                    {/if}
                                {else}
                                    <a href="/category/index/{$itemChildren['id']}">{$itemChildren['name']}</a>
                                {/if}
                            </li>
                        {/foreach}
                    </ul>
                {/if}
            </li>
        {/foreach}
    </ul>

    <div class="menuCaption">Cart:</div>
    <a href="/cart" title="Go to cart">Cart</a>
    <span id="cartCntItems">
        {if $cartCntItems > 0}{$cartCntItems}{else}empty{/if}
    </span>
</div>