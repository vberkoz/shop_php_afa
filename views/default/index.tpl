{foreach $rsProducts as $item}
    <div style="float: left; padding: 0 30px 50px 0; width: 150px;">
        <div style="height: 140px;">
            <a href="/product/{$item['id']}/">
                <img src="/images/products/{$item['image']}"
                     alt="{$item['image']}"
                     style="max-height: 130px; max-width: 100px;">
            </a>
        </div>
        <br>
        <a href="/product/{$item['id']}/">{$item['name']}</a>
    </div>
{/foreach}