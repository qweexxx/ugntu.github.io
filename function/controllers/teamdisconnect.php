<?php
    session_start();
    include("../connect.php");
    $json = file_get_contents("php://input");
    $obj = json_decode($json, true);
    $id_team = $obj['id'];
    $sql_id_user = "SELECT `id_user` FROM `user` WHERE `email`= '{$_SESSION['email']}'";
    $id_user = $connect->query($sql_id_user)->fetch_assoc()['id_user'];

    $sql = "DELETE FROM `user_team` WHERE `id_user` = {$id_user} AND `id_team` = {$id_team}";
    $result = $connect->query($sql);
    header($_SERVER["SERVER_PROTOCOL"] . " 200");
    $answer = [
        "success" => true,
        "message" => "Вы успешно вышли из группы"
    ];

    $answer = json_encode($answer);
    echo $answer;

?>