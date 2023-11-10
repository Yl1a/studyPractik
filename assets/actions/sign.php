<?php

require_once '../database/connection.php';

session_start();

global $connection;

if (isset($_POST)) {
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $count = iconv_strlen($password);

    $_SESSION['login'] = $login;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['confirm'] = $confirm;

    if (empty($login)) {
        $errorLogin = "*введите логин";
    }


    $sql = "SELECT * FROM users WHERE users.login = '$login' LIMIT 1";
    $user = $connect->query($sql)->fetch(PDO::FETCH_ASSOC);


    if (empty($email)) {
        $errorEmail = "*введите почту";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorEmail = "*неверный формат почты";
    } elseif (!empty($user)) {
        $errorEmail .= '*у вас уже есть аккаунт';
    }
    if (empty($password)) {
        $errorPassword = "*введите пароль";
    } elseif (empty($password)) {
        $errorPassword = "*слишком короткий пароль";
    } elseif ($count < 6) {
        $errorPassword .= '*введите не менее 6 символов';
    }

    if (empty($confirm)) {
        $errorConfirm = "*повторите пароль";
    }
    if ($password != $confirm) {
        $errorConfirm .= '*пароли не совпадают';
    }

    if (!empty($errorAll) || !empty($errorLogin) || !empty($errorEmail) || !empty($errorPassword) || !empty($errorConfirm)) {
        $_SESSION['modal'] = true;
        $_SESSION['errors'] = [
            'erLogin' => $errorLogin,
            'erEmail' => $errorEmail,
            'erPassword' => $errorPassword,
            'erConfirm' => $errorConfirm,
        ];
    } else {
        $hash = md5($password);
        $sql = "INSERT INTO `users` (`login`, `password`, `email`, `level`) VALUES ('$login', '$hash', '$email', '1')";
        $connect->query($sql);

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $users = $connect->query($sql)->fetch();
        $_SESSION['USER'] = $users['id'];
    }
}

/* 
if (empty($_SESSION['errors'])) {
  $_SESSION['USER'] = $user;
} else {
  $_SESSION['opened_sign'] = true;
} */


header('Location: ../../?page=main');

