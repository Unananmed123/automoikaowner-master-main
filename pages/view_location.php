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
    <link rel="stylesheet" href="../assets/styles/view_location.css">
    <title>Достпуные сеансы</title>
</head>
<body>
<div class="places">
<form action="../php/view_location.php" method="post">
    <span onclick="history.back()" class="back_view">Назад</span>
    <label>Номер телефона</label><br>
    <input name="number_phone" type="number" placeholder="Введите свой номер телефона"><br>
    <label>Номера машины</label><br>
    <input name="car_number" type="text" placeholder="Введите номера машины"><br>
    <label>Марка машины</label><br>
    <input name="car" type="text" placeholder="Введите марку машины"><br>
    <label>Имя</label><br>
    <input name="name" type="text" placeholder="Введите свое имя"><br>
    <label>Желаемое время</label><br>
    <input name="time" type="text" placeholder="Введите желаемое время для сеанса"><br>
    <input type="submit" value="Подтвердить">
</form>
</div>
<div class="plases" style="
margin: 15px;
">
<div class="place1">
<span>Кабинка №1</span><br>
<span>Время работы кабинки: 10:00 - 15:00</span><br>
    <a href="#">Узнать больше</a>
    <form action="../php/book.php" method="post">
        <input type="submit" value="Забранировать" name="cab1">
    </form>
</div>
<div class="place2">
    <span>Кабинка №2</span><br>
    <span>Время работы кабинки: 15:00 - 20:00</span><br>
    <a href="#">Узнать больше</a>
    <form action="../php/book.php" method="post">
        <input type="submit" value="Забранировать" name="cab2">
    </form>
</div>
<div class="place3">
    <span>Кабинка №3</span><br>
    <span>Время работы кабинки: 20:00 - 23:00</span><br>
    <a href="#">Узнать больше</a>
    <form action="../php/book.php" method="post">
        <input type="submit" value="Забранировать" name="cab3">
    </form>
</div>
</div>

<a href="<?php if (!empty($_SESSION['user_id'])){
    echo '../pages/profile_owner.php';
}
else{
    echo '../pages/profile.php';
}
?>">

<img src="data:<?=$user[0]['type']?>;base64, <?=$user[0]['avatar']?>" alt="avatar" class="avatar" style="
    width: 200px;
    height: 130px;
    border-radius: 50%;
    overflow: hidden;
    margin-top: 10px;
    margin-left: 14px;
    top: 0;
   display: flex;
   text-align: right;
">
</a>
</body>
</html>
