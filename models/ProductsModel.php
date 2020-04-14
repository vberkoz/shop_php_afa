<?php

function getLastProducts($limit = null, $db) {
    $sql = "SELECT *
            FROM products
            ORDER BY id DESC";

    if ($limit) {
        $sql .= " LIMIT {$limit}";
    }

    $rs = $db->query($sql);

    $i = 0;
    $products = array();
    while ($row = $rs->fetch()) {
        $products[$i]['id'] = $row['id'];
        $products[$i]['category_id'] = $row['category_id'];
        $products[$i]['name'] = $row['name'];
        $products[$i]['description'] = $row['description'];
        $products[$i]['price'] = $row['price'];
        $products[$i]['image'] = $row['image'];
        $products[$i]['status'] = $row['status'];
        $i++;
    }
    return $products;
}