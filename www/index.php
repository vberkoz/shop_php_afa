<?php

session_start();
//error_reporting(E_ERROR | E_PARSE);

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

include_once '../config/config.php';
include_once '../config/db.php';
include_once '../library/mainFunctions.php';

$request_uri = substr($_SERVER["REQUEST_URI"], 1);
$parameters = explode("/", $request_uri);

$smarty->assign('cartCntItems', count($_SESSION['cart']));

loadPage($smarty, $db, $parameters);