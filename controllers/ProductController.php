<?php

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function IndexAction($smarty, $db, $id) {
    $rsCategories = getAllMainCatsWithChildren($db);
    $rsProduct = getProduct($id, $db);

    $smarty->assign('pageTitle', 'Product');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProduct', $rsProduct);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'product');
    loadTemplate($smarty, 'footer');
}