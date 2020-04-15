<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-15 13:55:56
  from 'C:\projects\shop_php_afa\views\default\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e96f64c4f7601_69432841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99be6d4ad14037d7aed8ba9c193e43d209b6f6db' => 
    array (
      0 => 'C:\\projects\\shop_php_afa\\views\\default\\index.tpl',
      1 => 1586951754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e96f64c4f7601_69432841 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <div style="float: left; padding: 0 30px 50px 0; width: 150px;">
        <div style="height: 140px;">
            <a href="/product/index/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
"
                     alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
"
                     style="max-height: 130px; max-width: 100px;">
            </a>
        </div>
        <br>
        <a href="/product/index/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
