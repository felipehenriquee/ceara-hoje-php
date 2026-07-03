<?php 
    include("db.php");
   
    mysqli_set_charset($connect,"utf8");
    
    $principaisEventos = mysqli_query($connect, "SELECT * FROM eventos where (
        SELECT id from cidades WHERE nomecru='$URL[1]') = cidade  ORDER BY createdAt DESC limit 3");
    echo mysqli_error($connect);
    // $principaisLista = array();
    
   
    
?>