<?php

function loadPage($smarty, $db, $parameters) {
    if (!in_array("", $parameters)) {
        if (array_key_exists(2, $parameters) && $parameters[2]) {
            $controllerName = ucfirst($parameters[0]);
            $actionName = ucfirst($parameters[1]);
            $id = $parameters[2];
        } elseif (array_key_exists(1, $parameters) && $parameters[1]) {
            $controllerName = ucfirst($parameters[0]);
            $actionName = ucfirst($parameters[1]);
            $id = 0;
        } elseif (array_key_exists(0, $parameters) && $parameters[0]) {
            $controllerName = ucfirst($parameters[0]);
            $actionName = 'Index';
            $id = 0;
        } else {
            $controllerName = 'Index';
            $actionName = 'Index';
            $id = 0;
        }
    } else {
        $controllerName = 'Index';
        $actionName = 'Index';
        $id = 0;
    }

    $controllerName = PathPrefix . $controllerName . PathPostfix;
    $actionName = $actionName . 'Action';

    if (file_exists($controllerName)) {
        include_once $controllerName;
        if (function_exists($actionName)) {
            $function = $actionName;
            $function($smarty, $db, $id);
        }
    } else {
        include_once PathPrefix . 'Index' . PathPostfix;
        $function = 'IndexAction';
        $function($smarty, $db, 0);
    }
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