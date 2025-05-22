<?php
    session_start();
    include('../connect.php');

    $sql = "SELECT * FROM `user` WHERE `email` = '{$_POST["email"]}' AND `password` = '{$_POST["password"]}'";

    $result = $connect->query($sql);
    if($result->num_rows){
        $value = $result->fetch_assoc();
        $_SESSION['email'] = $value['email'];
    }

    header("location: /personal/personal.php");
    exit;

?>