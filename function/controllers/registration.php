<?php
    session_start();
    include('../connect.php');

    $sql = sprintf("INSERT INTO `user`(`id_user`, `fio`, `phone`, `group_user`, `email`, `password`) VALUES (NULL,'%s','%s','%s','%s','%s')", $_POST['fio'], $_POST['phone'], $_POST['group'], $_POST['email'], $_POST['password']);

    $result = $connect->query($sql);
    if($result){
        $_SESSION["email"] = $_POST["email"];
    }

    header("location: /personal/personal.php");
    exit;
?>