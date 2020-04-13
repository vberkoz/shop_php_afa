<?php

function getAllMainCatsWithChildren($db) {
    $sql = 'SELECT *
            FROM categories
            WHERE parent_id = 0';

    $rs = $db->query($sql);

    $i = 0;
    $categories = array();
    while ($row = $rs->fetch()) {
        $categories[$i]['id'] = $row['id'];
        $categories[$i]['parent_id'] = $row['parent_id'];
        $categories[$i]['name'] = $row['name'];
        $i++;
    }
    return $categories;
}