<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-18 11:49:17
  from 'C:\projects\shop_php_afa\views\default\leftcolumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9acd1ded9532_67419798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2108d06e1e928cc86edba9d6d22d6893c54198af' => 
    array (
      0 => 'C:\\projects\\shop_php_afa\\views\\default\\leftcolumn.tpl',
      1 => 1587203354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9acd1ded9532_67419798 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="leftColumn">
    <div class="menuCaption">Menu:</div>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <li>
                <?php if (isset($_smarty_tpl->tpl_vars['catId']->value)) {?>
                    <?php if ($_smarty_tpl->tpl_vars['catId']->value == $_smarty_tpl->tpl_vars['item']->value['id']) {?>
                        <a href="/category/index/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="active"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                    <?php } else { ?>
                        <a href="/category/index/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                    <?php }?>
                <?php } else { ?>
                    <a href="/category/index/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChildren');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemChildren']->value) {
?>
                            <li>
                                <?php if (isset($_smarty_tpl->tpl_vars['catId']->value)) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['catId']->value == $_smarty_tpl->tpl_vars['itemChildren']->value['id']) {?>
                                        <a href="/category/index/<?php echo $_smarty_tpl->tpl_vars['itemChildren']->value['id'];?>
"
                                           class="active"><?php echo $_smarty_tpl->tpl_vars['itemChildren']->value['name'];?>
</a>
                                    <?php } else { ?>
                                        <a href="/category/index/<?php echo $_smarty_tpl->tpl_vars['itemChildren']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChildren']->value['name'];?>
</a>
                                    <?php }?>
                                <?php } else { ?>
                                    <a href="/category/index/<?php echo $_smarty_tpl->tpl_vars['itemChildren']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChildren']->value['name'];?>
</a>
                                <?php }?>
                            </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                <?php }?>
            </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul><br>

    <div id="registerBox">
        <div class="menuCaption showHidden" onclick="showRegisterBox();">Registration</div><br>
        <div id="registerBoxHidden">
            Email:<br><input type="text" id="email" name="email" value=""><br><br>
            Password:<br><input type="password" id="pwd1" name="pwd1" value=""><br><br>
            Repeat password:<br><input type="password" id="pwd2" name="pwd2" value=""><br><br>
            <input type="button" onclick="registerNewUser();" value="Register">
        </div>
    </div><br>

    <div class="menuCaption">Cart:</div>
    <a href="/cart" title="Go to cart">Cart</a>
    <span id="cartCntItems">
        <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value > 0) {
echo $_smarty_tpl->tpl_vars['cartCntItems']->value;
} else { ?>empty<?php }?>
    </span>
</div><?php }
}
