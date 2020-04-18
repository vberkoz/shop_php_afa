<?php

$dblocation = "localhost";
$dbname = "shop_php_afa";
$dbuser = "root";
$dbpassword = "";

$dsn = "mysql:host={$dblocation};dbname={$dbname}";
$db = new PDO($dsn, $dbuser, $dbpassword);
$db->exec("set names utf8");