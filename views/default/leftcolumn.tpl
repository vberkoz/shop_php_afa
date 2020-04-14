<div id="leftColumn">
    <ul>
        {foreach $rsCategories as $item}
            <li>
                {if $catId eq $item['id']}
                    <a href="/?controller=category&id={$item['id']}" class="active">{$item['name']}</a>
                {else}
                    <a href="/?controller=category&id={$item['id']}">{$item['name']}</a>
                {/if}
                {if isset($item['children'])}
                    <ul>
                        {foreach $item['children'] as $itemChildren}
                            <li>
                                {if $catId eq $itemChildren['id']}
                                    <a href="/?controller=category&id={$itemChildren['id']}"
                                       class="active">{$itemChildren['name']}</a>
                                {else}
                                    <a href="/?controller=category&id={$itemChildren['id']}">{$itemChildren['name']}</a>
                                {/if}
                            </li>
                        {/foreach}
                    </ul>
                {/if}
            </li>
        {/foreach}
    </ul>
</div>