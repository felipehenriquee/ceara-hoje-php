<?php
    require_once(__DIR__ . '/env.php');

    $connect = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS')) OR DIE ("Falha ao conectar");
    $db = mysqli_select_db($connect, getenv('DB_NAME')) OR DIE("Não selecionou o db");
    //mysqli_set_charset($connect,"utf8");

?>