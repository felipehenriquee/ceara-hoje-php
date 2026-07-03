<?php 
    include("db.php");
   
    mysqli_set_charset($connect,"utf8");
    
    $principais = mysqli_query($connect, "SELECT *  FROM noticias where (
        SELECT id from cidades WHERE nomecru='$URL[1]') = cidade  ORDER BY createdAt DESC limit 6");
    echo mysqli_error($connect);
    // $principaisLista = array();
    
   
    
?>


