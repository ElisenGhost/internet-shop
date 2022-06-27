<?php
session_start();
require_once '../DBConnection/dbConnection.php';

$user_id = $_SESSION['user_id'];
if (isset($user_id))
{
    $tovar = $_POST['tovar_id'];
    if (isset($_SESSION['i']))
    {
     $_SESSION['i'] = $_SESSION['i'] + 1;

    } else {
        $_SESSION['i'] = 1;
    }


    $link = mysqli_connect('localhost', 'root', '', 'global');
    $query = "INSERT INTO `shop` (`user_id`, `tovar_id`) VALUES ('$user_id', '$tovar')";
    mysqli_query($link, $query);
    //$mysql->close();
    header('Location: ../main.php');
} else {
    $_SESSION['message'] = "Вы не авторизированны";
    header('Location: ../aut.php');
}



