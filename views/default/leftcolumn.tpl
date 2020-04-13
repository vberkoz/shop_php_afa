<div id="leftColumn">
    <ul>
        {foreach $rsCategories as $item}
            <li>
                <a href="#">{$item['name']}</a>
                {if isset($item['children'])}
                    <ul>
                        {foreach $item['children'] as $itemChildren}
                            <li><a href="#">{$itemChildren['name']}</a></li>
                        {/foreach}
                    </ul>
                {/if}
            </li>
        {/foreach}
    </ul>
</div>