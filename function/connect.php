<?php
    $connect = new mysqli("localhost", "root", "", "ugntu");
    if(!$connect){
        echo "Ошибка базы данных: ".mysqli_connect_error();
    }
?>