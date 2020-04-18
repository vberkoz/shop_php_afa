<?php

function registerNewUser($email, $pwdMD5, $username, $phone, $address, $db) {
    $email = htmlspecialchars($email);
    $username = htmlspecialchars($username);
    $phone = htmlspecialchars($phone);
    $address = htmlspecialchars($address);

    $sql = "INSERT INTO users (email, pwd, username, phone, address) 
            VALUES ('{$email}', '{$pwdMD5}', '{$username}', '{$phone}', '{$address}')";

    $result = $db->prepare($sql);

    if ($result->execute()) {
        $sql = "SELECT *
                FROM users
                WHERE (`email` = '{$email}' AND `pwd` = '{$pwdMD5}')";
        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $rs = $result->fetch();

        if (isset($rs['id'])) {
            $rs['success'] = 1;
        } else {
            $rs['success'] = 0;
        }
    } else {
        $rs['success'] = 0;
    }

    return $rs;
}

function checkRegisterParams($email, $pwd1, $pwd2) {
    $res = null;

    if (!$email) {
        $res['success'] = false;
        $res['message'] = 'Type email';
    }

    if (!$pwd1) {
        $res['success'] = false;
        $res['message'] = 'Type password';
    }

    if (!$pwd2) {
        $res['success'] = false;
        $res['message'] = 'Type password again';
    }

    if ($pwd1 != $pwd2) {
        $res['success'] = false;
        $res['message'] = 'Passwords does not match';
    }

    return $res;
}

function checkUserEmail($email, $db) {
    $sql = "SELECT id FROM users WHERE email = '{$email}'";
    $result = $db->query($sql);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $rs = $result->fetch();

    return $rs;
}