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

    <title>Регистрация</title>
</head>
<body>
        <form action="inc/up.php" method="post"> <h1>Регистрация</h1>
            <label>ФИО</label>
            <input type="text" name="full_name" placeholder="Введите своё полное имя">
            <label>Логин</label>
            <input type="text" name="login" placeholder="Введите свой логин">
            <label>Почта</label>
            <input type="email" name="email" placeholder="Введите адрес своей почты">
            <label>Пароль</label>
            <input type="password" name="password" placeholder="Введите свой пароль">
            <label>Подтверждение пароля</label>
            <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
            <button class="btn" type="submit">Зарегистрироваться</button>
            <p>
                У вас уже есть аккаунт? - <a href="aut.php">Авторизируйтесь сейчас!</a>
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