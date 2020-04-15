<?php

include_once '../models/CategoriesModel.php';

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

function getProductsByCategory($catId, $limit = null, $db) {
    $catId = intval($catId);
    $childrenCategories = getChildrenForCat($catId, $db);

    $categories = '';
    if ($childrenCategories) {
        foreach ($childrenCategories as $item) {
            $categories .= "{$item['id']}, ";
        }
        $categories = rtrim($categories, ', ');
    } else {
        $categories = "{$catId}";
    }

    $sql = "SELECT *
            FROM products
            WHERE category_id IN ({$categories})
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

function getProduct($id, $db) {
    $id = intval($id);

    $sql = "SELECT *
            FROM products
            WHERE id = {$id}";

    $result = $db->query($sql);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    return $result->fetch();
}