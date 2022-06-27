<?php
session_start();
require_once '../DBConnection/dbConnection.php';

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm= $_POST['password_confirm'];

 if (!preg_match("/^[a-zA-Z0-9]+$/", $_POST['login'])) {
    $_SESSION['message'] = "Логин может состоять только из букв английского алфавита и цифр";
    header('Location: ../reg.php');
    exit();
} else if  (mb_strlen($_POST['login']) < 3 or mb_strlen($_POST['login']) > 50) {
    $_SESSION['message'] = "Логин должен быть не меньше 3-х символов и не больше 50";
    header('Location: ../reg.php');
    exit();
} else if (mb_strlen($_POST['full_name']) < 3 or mb_strlen($_POST['full_name']) > 50) {
    $_SESSION['message'] = "ФИО должен быть не меньше 3-х символов и не больше 50";
    header('Location: ../reg.php');
    exit();
} else if (mb_strlen($_POST['password']) < 3 or mb_strlen($_POST['password']) > 50) {
    $_SESSION['message'] = "пароль должен быть не меньше 3-х символов и не больше 50";
    header('Location: ../reg.php');
    exit();
} else if (mb_strlen($_POST['password_confirm']) < 3 or mb_strlen($_POST['password_confirm']) > 50) {
    $_SESSION['message'] = "пароль должен быть не меньше 3-х символов и не больше 50";
    header('Location: ../reg.php');
    exit();
}

if ($password === $password_confirm) {
    $password = md5($password);
    $mysql = new mysqli('localhost', 'root', '', 'global');
    $mysql->query ("INSERT INTO `users` (`full_name`, `password`,  `login`, `email`) VALUES ('$full_name', '$password', '$login', '$email')");
    $result = $mysql->query("SELECT * FROM `users` WHERE `login` =  '$login' AND `password` = '$password'");
    $mysql->close();
    $_SESSION['message'] = "Регистрация прошла успешно";
   
    header('Location: ../aut.php');

} else {
    header('Location: ../reg.php');
}
