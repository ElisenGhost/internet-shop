<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/W1/style/css/sty.css">
    <title>Авторизация</title>
</head>
<body>
        <form action="inc/in.php" method="post"> <h1>Авторизируйтесь</h1>
            <label>Логин</label>
            <input type="text" name="login" placeholder="Введите свой логин">
            <label>Пароль</label>
            <input type="password"  name="password" placeholder="Введите свой пароль">
            <button class="btn" type="submit">Войти</button>
            <p>
                У вас нет аккаунта? - <a href="reg.php">Зарегистируйтесь сейчас!</a>
            </p>
            <?php 
                if (isset($_SESSION['message'])) {
                    echo '<p class="msg"> '. $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
            ?>
        </form>
</body>
</html>
