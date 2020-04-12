<?php

function testAction() {
    echo 'IndexController.php > testAction';
}

function indexAction($smarty) {
    $smarty->assign('pageTitle', 'Home');

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}