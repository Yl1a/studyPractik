<?php

require_once '../database/connection.php';

session_start();

global $connect;

if (isset($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;

    $sql = "SELECT * FROM users WHERE users.email = '$email' LIMIT 1";
    $user = $connect->query($sql)->fetch(PDO::FETCH_ASSOC);
    $hash = md5($password);
    $hashUser = $user['password'];

    if (empty($email)) {
        $errorEmail .= "*введите почту";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorEmail .= "*неверный формат почты";
    } elseif (empty($user)) {
        $errorEmail .= '*у вас нет аккаунта';
    }


    if (empty($password)) {
        $errorPassword = "*введите пароль";
    } elseif ($hash != $hashUser) {
        $errorPassword = "*неверный пароль";
    }


    if (!empty($errorEmail) || !empty($errorPassword)) {
        $_SESSION['modal'] = true;
        $_SESSION['errors'] = [
            'erEmail' => $errorEmail,
            'erPassword' => $errorPassword
        ];
    } else {
        $_SESSION['USER'] = $user['id'];
    }
}

/* 
if (empty($_SESSION['errors'])) {
  $_SESSION['USER'] = $user;
} else {
  $_SESSION['opened_sign'] = true;
} */


header('Location: ../../?page=main');
