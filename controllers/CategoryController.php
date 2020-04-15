<?php

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function indexAction($smarty, $db, $id) {
    $rsCategories = getAllMainCatsWithChildren($db);
//    $catId = isset($_GET['id']) ? $_GET['id'] : null;
//    if (!$catId) exit();

    $rsProducts = getProductsByCategory($id, 20, $db);

    $smarty->assign('pageTitle', 'Category');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('catId', $id);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}