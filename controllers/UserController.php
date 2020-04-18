<?php

include_once '../models/CategoriesModel.php';
include_once '../models/UsersModel.php';

function registerAction($smarty, $db, $id) {
    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
    $email = trim($email);

    $pwd1 = isset($_REQUEST['pwd1']) ? $_REQUEST['pwd1'] : null;
    $pwd2 = isset($_REQUEST['pwd2']) ? $_REQUEST['pwd2'] : null;

    $phone = isset($_REQUEST['phone']) ? $_REQUEST['phone'] : null;
    $address = isset($_REQUEST['address']) ? $_REQUEST['address'] : null;
    $username = isset($_REQUEST['username']) ? $_REQUEST['username'] : null;
    $username = trim($username);

    $resData = null;
    $resData = checkRegisterParams($email, $pwd1, $pwd2);

    if (!$resData && checkUserEmail($email, $db)) {
        $resData['success'] = false;
        $resData['message'] = "User with email {$email} already exist";
    }

    if (!$resData) {
        $pwdMD5 = md5($pwd1);

        $userData = registerNewUser($email, $pwdMD5, $username, $phone, $address, $db);

        if ($userData['success']) {
            $resData['message'] = 'User successfully registered';
            $resData['success'] = 1;

            $resData['userName'] = $userData['username'] ? $userData['username'] : $userData['email'];
            $resData['userEmail'] = $email;

            $_SESSION['user'] = $userData;
            $_SESSION['user']['displayName'] = $userData['username'] ? $userData['username'] : $userData['email'];
        } else {
            $resData['success'] = 0;
            $resData['message'] = 'Unable to register';
        }
    }

    echo json_encode($resData);
}