<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-16 16:03:37
  from 'C:\projects\shop_php_afa\views\default\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9865b9ca3d51_45070056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98b4b51402cc8294109bd5ce946054f20900173e' => 
    array (
      0 => 'C:\\projects\\shop_php_afa\\views\\default\\cart.tpl',
      1 => 1587045809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9865b9ca3d51_45070056 (Smarty_Internal_Template $_smarty_tpl) {
?> <h1>Cart</h1>

 <?php if (!$_smarty_tpl->tpl_vars['rsProducts']->value) {?>
     Cart is empty
 <?php } else { ?>
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
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
             <tr>
                 <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null);?>
</td>
                 <td><a href="/product/index/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></td>
                 <td>
                     <input type="text"
                            name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
                            id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
                            value="1"
                            onkeyup="recalculatePrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);">
                 </td>
                 <td><span id="itemUnitPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</span></td>
                 <td><span id="itemTotalPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</span></td>
                 <td>
                     <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
                        onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;"
                        href="#" alt="Remove from cart">Remove</a>
                     <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
                        class="hideme"
                        onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;"
                        href="#" alt="Restore item">Restore</a>
                 </td>
             </tr>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
     </table>
 <?php }
}
}
