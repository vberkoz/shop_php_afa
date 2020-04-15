<?php

include_once '../config/config.php';
include_once '../config/db.php';
include_once '../library/mainFunctions.php';

//$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
$request_uri = substr($_SERVER["REQUEST_URI"], 1);
$parameters = explode("/", $request_uri);
//d($parameters);

//d($GLOBALS);
//d(phpinfo());
//$actionName = isset($_GET['action']) ? ucfirst($_GET['action']) : 'index';
//$controllerName = isset($parameters[0]) ? ucfirst($parameters[0]) : 'Index';
//$actionName = $parameters[1];

//loadPage($smarty, $controllerName, $actionName, $db);
loadPage($smarty, $db, $parameters);