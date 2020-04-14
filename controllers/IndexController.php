<?php

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function indexAction($smarty, $db) {
    $rsCategories = getAllMainCatsWithChildren($db);
    $rsProducts = getLastProducts(20, $db);

    $smarty->assign('pageTitle', 'Home');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}