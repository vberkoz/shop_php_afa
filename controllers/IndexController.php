<?php

include_once '../models/CategoriesModel.php';

function testAction() {
    echo 'IndexController.php > testAction';
}

function indexAction($smarty, $db) {
    $rsCategories = getAllMainCatsWithChildren($db);

    $smarty->assign('pageTitle', 'Home');
    $smarty->assign('rsCategories', $rsCategories);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}