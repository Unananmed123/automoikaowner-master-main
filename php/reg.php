<?php
session_start();
require 'db.php';

$login = $_POST['login'];
$name_user = $_POST['name_user'];
$password = $_POST['password'];
$password_repeat = $_POST['password_repeat'];

if ($password != $password_repeat){
    $_SESSION['error'] = 'Пароли не совпадают!';
    header('Location: ../pages/reg.php');
}

$user = select(
    'SELECT * FROM users WHERE login = :login',
    [
        'login' => $login
    ]
);
if (!empty($user)){
    $_SESSION['error'] = 'Пользователь уже существует!';
    header('Location: ../pages/reg.php');
}
$hash = password_hash($password, PASSWORD_DEFAULT);
$user_id = insert(
    'INSERT INTO users (login, password, name_user) VALUES (:login, :password, :name_user)',
    [
        'login' => $login,
        'name_user' => $name_user,
        'password' => $hash
    ]
);
$_SESSION['user_id'] = $user_id;
header('Location: ../');