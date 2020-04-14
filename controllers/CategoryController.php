<?php

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function indexAction($smarty, $db) {
    $rsCategories = getAllMainCatsWithChildren($db);
    $catId = isset($_GET['id']) ? $_GET['id'] : null;
    if (!$catId) exit();

    $rsProducts = getProductsByCategory($catId, 20, $db);

    $smarty->assign('pageTitle', 'Home');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('catId', $catId);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}