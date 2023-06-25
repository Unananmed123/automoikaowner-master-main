<?php
session_start();
?>
<head>
<link rel="stylesheet" href="../assets/styles/reg_auth.css">
</head>
<div class="autoris">
<form action="../php/auth.php" method="post">
    <span onclick="history.back()" class="back">Назад</span>
    <span class="error"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></span><br>
    <label for="login">Логин</label><br>
    <input  type="text" name="login" placeholder="Введите логин:" class="input_reg_auth"><br>
    <label for="password">Пароль</label><br>
    <input  type="password" name="password" placeholder="Введите пароль:" class="input_reg_auth"><br>
    <input class="button_auth" type="submit" value="Войти">
    <p>
        у вас нет аккаунта ? - <a href="./reg.php">Зарегестрируйтесь</a>
    </p>
</form>
</div>
