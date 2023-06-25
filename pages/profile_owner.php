<?php
session_start();
require '../php/db.php';

$user = select('SELECT * FROM users WHERE id = :id', ['id' => $_SESSION['user_id']]);
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Профиль</title>
    <link rel="stylesheet" href="../assets/styles/settings.css">
</head>
<body>
<div class="container">
    <a href="<?php if (!empty($_SESSION['user_id'])){
        echo '../';
    }
    else{
        echo './auth.php';
    }
    ?>">На главную</a><br>
    <a href="../pages/user_settings.php">Настройки</a>
    <a href="../php/exit.php">Выйти из аккаунта</a>
    <div class="profileStyle">
        <img src="data:<?=$user[0]['type']?>;base64, <?=$user[0]['avatar']?>" alt="avatar" class="avatar">
    <div class="user_info">
        <h2><?php echo $user[0]['surname']; echo ' '.$user[0]['name_user']; echo ' '.$user[0]['patronymic']; ?></h2>
        <span>ID: <?php echo $user[0]['id']; ?></span>
    </div>
    </div>
</div>
</body>
</html>
