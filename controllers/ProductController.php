<?php

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function IndexAction($smarty, $db, $id) {
    $rsCategories = getAllMainCatsWithChildren($db);
    $rsProduct = getProduct($id, $db);

    $smarty->assign('itemInCart', 0);
    if (in_array($id, $_SESSION['cart'])) {
        $smarty->assign('itemInCart', 1);
    }

    $smarty->assign('pageTitle', 'Product');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProduct', $rsProduct);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'product');
    loadTemplate($smarty, 'footer');
}