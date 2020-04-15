<h1>{$rsProduct['name']}</h1>

<div style="display: flex;">
    <img src="/images/products/{$rsProduct['image']}"
         alt="{$rsProduct['image']}"
         style="max-height: 300px; max-width: 300px;">

    <div style="padding: 30px;">
        Price: {$rsProduct['price']}

        <a id="removeCart_{$rsProduct['id']}"
           {if !$itemInCart}class="hideme"{/if}
           onclick="removeFromCart({$rsProduct['id']}); return false;"
           href="#" alt="Remove from cart">Remove from cart</a>
        <a id="addCart_{$rsProduct['id']}"
           {if $itemInCart}class="hideme"{/if}
           onclick="addToCart({$rsProduct['id']}); return false;"
           href="#" alt="Add to cart">Add to cart</a>
        <p>
            Description<br>{$rsProduct['description']}
        </p>
    </div>
</div>