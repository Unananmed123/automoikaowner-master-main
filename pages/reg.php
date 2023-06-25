<?php
session_start();
?>
<head>
<link rel="stylesheet" href="../assets/styles/reg_auth.css">
</head>
<form action="../php/reg.php" method="post">
    <span onclick="history.back()" class="back">Назад</span>
    <span class="error"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></span><br>
    <label>Имя</label><br>
    <input  type="text" name="name_user" placeholder="Введите свое имя:" class="input_reg_auth" required><br>
    <label>Логин</label><br>
    <input  type="text" name="login" placeholder="Придумайте логин:" class="input_reg_auth" required><br>
    <label>Пароль</label><br>
    <input  type="password" name="password" placeholder="Придумайте пароль:" class="input_reg_auth" required><br>
    <label>Подтверждение пароля</label><br>
    <input  type="password" name="password_repeat" placeholder="Повторите пароль:" class="input_reg_auth" required><br>
    <input class="button_regauth" type="submit" value="Зарегистрироваться">
    <p>
        у вас есть аккаунта ? - <a href="./auth.php" class="auth_href">Авторизируйтесь</a>
    </p>
</form>
