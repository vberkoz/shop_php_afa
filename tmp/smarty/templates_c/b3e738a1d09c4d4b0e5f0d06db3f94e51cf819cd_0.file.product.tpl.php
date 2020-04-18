<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-15 22:40:04
  from 'C:\projects\shop_php_afa\views\default\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e977124a2ec14_86369272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3e738a1d09c4d4b0e5f0d06db3f94e51cf819cd' => 
    array (
      0 => 'C:\\projects\\shop_php_afa\\views\\default\\product.tpl',
      1 => 1586983175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e977124a2ec14_86369272 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h1>

<div style="display: flex;">
    <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
"
         alt="<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
"
         style="max-height: 300px; max-width: 300px;">

    <div style="padding: 30px;">
        Price: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>


        <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
"
           <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value) {?>class="hideme"<?php }?>
           onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;"
           href="#" alt="Remove from cart">Remove from cart</a>
        <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
"
           <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value) {?>class="hideme"<?php }?>
           onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;"
           href="#" alt="Add to cart">Add to cart</a>
        <p>
            Description<br><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>

        </p>
    </div>
</div><?php }
}
