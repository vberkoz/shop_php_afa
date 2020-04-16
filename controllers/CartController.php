<?php

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function addtocartAction($smarty, $db, $id) {
    $resData = array();

    if (isset($_SESSION['cart']) && array_search($id, $_SESSION['cart']) === false) {
        $_SESSION['cart'][] = $id;
        $resData['cntItems'] = count($_SESSION['cart']);
        $resData['success'] = 1;
    } else {
        $resData['success'] = 0;
    }

    echo json_encode($resData);
}

function removefromcartAction($smarty, $db, $id) {
    $resData = array();
    $key = array_search($id, $_SESSION['cart']);

    if ($key !== false) {
        unset($_SESSION['cart'][$key]);
        $resData['success'] = 1;
        $resData['cntItems'] = count($_SESSION['cart']);
    } else {
        $resData['success'] = 0;
    }

    echo json_encode($resData);
}

function indexAction($smarty, $db, $id) {
    $itemsIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

    $rsCategories = getAllMainCatsWithChildren($db);
    $rsProducts = getProductsByIds($itemsIds, $db);

    $smarty->assign('pageTitle', 'Cart');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'cart');
    loadTemplate($smarty, 'footer');
}