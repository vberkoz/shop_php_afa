<?php

function loadPage($smarty, $db, $parameters) {
    if ($parameters[0]) {
        $controllerName = ucfirst($parameters[0]);
        $actionName = ucfirst($parameters[1]);
        $id = $parameters[2];
    } else {
        $controllerName = 'Index';
        $actionName = 'Index';
        $id = null;
    }

    include_once PathPrefix . $controllerName . PathPostfix;

    $function = $actionName . 'Action';
    $function($smarty, $db, $id);
}

function loadTemplate($smarty, $templateName) {
    $smarty->display($templateName . TemplatePostfix);
}

function d($value = null, $die = 1) {
    echo 'Debug: <br><pre>';
    print_r($value);
    echo '</pre>';

    if ($die) die;
}