<?php
session_start();
require '../php/db.php';

$user = select('SELECT * FROM users WHERE id = :id', ['id' => $_SESSION['user_id']]);
?>
<head>
    <link rel="stylesheet" href="../assets/styles/reg_auth.css">
</head>
<body>
<form action="../php/user_settings.php" method="post" enctype="multipart/form-data">
    <span onclick="history.back()" class="back">Назад</span>
    <input type="text" name="user_name" placeholder="Введите ваше имя" class="input_reg_auth"">
    <input type="text" name="surname" placeholder="Введите вашу фамилию" class="input_reg_auth">
    <input type="text" name="patronymic" placeholder="Введите ваше отчество" class="input_reg_auth">
    <input type="file" name="avatar" placeholder="Выберите картинку" class="input_reg_auth">
    <input type="submit" value="Сохранить" class="button_auth">
</form>
</body>