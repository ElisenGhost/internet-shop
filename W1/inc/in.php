<?php
session_start();
require_once '../DBConnection/dbConnection.php';

$login = $_POST['login'];
$password = md5($_POST['password']);

$mysql = new mysqli('localhost', 'root', '', 'global');
$result = $mysql->query("SELECT * FROM `users` WHERE `login` =  '$login' AND `password` = '$password'");
if (mysqli_num_rows($result) > 0) {

    $user = mysqli_fetch_assoc($result);
    $_SESSION["username"] = $login;
    for ($row_no = $result->num_rows - 1; $row_no >= 0; $row_no--) {
        $result->data_seek($row_no);
        $row = $result->fetch_assoc();
        $_SESSION["user_id"] = $row['user_id'];
    }
 
    header('Location: ../main.php');

} else {
    $_SESSION['message'] = "Не верный логин или пароль";
    header('Location: ../aut.php');
}


