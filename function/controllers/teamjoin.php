<?php
    session_start();
    include("../connect.php");
    $json = file_get_contents("php://input");
    $obj = json_decode($json, true);
    $id_team = $obj['id'];
    // var_dump($obj);
    if(!isset($_SESSION['email'])){
        $answer = [
            "success" => false,
            "message" => "Пожалуйста авторизуйтесь"
        ];
    }else{
        $sql_id_user = "SELECT `id_user` FROM `user` WHERE `email`= '{$_SESSION['email']}'";
        $id_user = $connect->query($sql_id_user)->fetch_assoc()['id_user'];

        $sql = "SELECT * FROM `user_team` WHERE `id_user` = {$id_user} AND `id_team` = {$id_team}";
        $result = $connect->query($sql);
        if(!$result->num_rows){
            $sql = "INSERT INTO `user_team`(`id_user_team`, `id_user`, `id_team`) VALUES (NULL,{$id_user},{$id_team})";
            $result = $connect->query($sql);

            if($result){
                header($_SERVER["SERVER_PROTOCOL"] . " 200");
                $answer = [
                    "success" => true,
                    "message" => "Вы успешно присоединились"
                ];
            }
        }else{
            header($_SERVER["SERVER_PROTOCOL"] . " 200");
            $answer = [
                "success" => true,
                "message" => "Вы уже присоединились к этой группе"
            ];
        }
    }
    $answer = json_encode($answer);
    echo $answer;

?>