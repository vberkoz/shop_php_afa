 <h1>Cart</h1>

 {if !$rsProducts}
     Cart is empty
 {else}
     <h2>Order data</h2>
     <table>
         <tr>
             <td>#</td>
             <td>Name</td>
             <td>Quantity</td>
             <td>Unit price</td>
             <td>Total price</td>
             <td>Action</td>
         </tr>
         {foreach $rsProducts as $item name=products}
             <tr>
                 <td>{$smarty.foreach.products.iteration}</td>
                 <td><a href="/product/index/{$item['id']}">{$item['name']}</a></td>
                 <td>
                     <input type="text"
                            name="itemCnt_{$item['id']}"
                            id="itemCnt_{$item['id']}"
                            value="1"
                            onkeyup="recalculatePrice({$item['id']});">
                 </td>
                 <td><span id="itemUnitPrice_{$item['id']}" value="{$item['price']}">{$item['price']}</span></td>
                 <td><span id="itemTotalPrice_{$item['id']}">{$item['price']}</span></td>
                 <td>
                     <a id="removeCart_{$item['id']}"
                        onclick="removeFromCart({$item['id']}); return false;"
                        href="#" alt="Remove from cart">Remove</a>
                     <a id="addCart_{$item['id']}"
                        class="hideme"
                        onclick="addToCart({$item['id']}); return false;"
                        href="#" alt="Restore item">Restore</a>
                 </td>
             </tr>
         {/foreach}
     </table>
 {/if}