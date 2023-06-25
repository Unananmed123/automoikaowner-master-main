<?php
session_start();
require './php/db.php';

$user = select('SELECT * FROM users WHERE id = :id', ['id' => $_SESSION['user_id']]);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/styles/index_style.css">
    <title>Главная</title>
</head>
<body
style="
background:
      linear-gradient(135deg,#0000 20.5%,#000000 0 29.5%,#0000 0) 0 21.5px,
      linear-gradient( 45deg,#0000 8%,#000000 0 17%, #0000 0 58%) 43px 0,
      linear-gradient(135deg,#0000 8%,#000000 0 17%, #0000 0 58%,#000000 0 67%,#0000 0),
      linear-gradient( 45deg,#0000 8%,#000000 0 17%, #0000 0 58%,#000000 0 67%,#0000 0 83%,#000000 0 92%,#0000 0),
      #25004d;
background-size: 86px 86px;

Reset

Copy
Copied!

"

>
<div class="nav">
<a href="./pages/view_location.php" class="href">View location</a>
<a href="<?php if (!empty($_SESSION['user_id'])){
    echo './pages/profile_owner.php';
}
else{
    echo './pages/profile.php';
}
?>" class="href">Profile</a>
<!--<a href="./pages/reg.php" class="href">Зарегистрироваться</a>-->
<!--<a href="./pages/auth.php" class="href">Войти</a>-->
<a href="" class="href">Contacts</a>
<a href="" class="href">About us</a>

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
   left: 0;
   position: absolute;


">
    </a>

</div>
</div>
</div>
</body>
<footer style="
background:;
">
    <div class="container">
        <div class="img_bg">
            <img src="./assets/images/wave (1).svg" alt="wave">
        </div>

</footer>
</html>