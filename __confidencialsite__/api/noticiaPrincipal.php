<?php 
     include("db.php");
   
     mysqli_set_charset($connect,"utf8");
     
     $noticiaPrincipal = mysqli_query($connect, "SELECT * FROM noticias where paginaInicial = 1 order by createdAt desc limit 2");
     echo mysqli_error($connect);
     // $principaisLista = array();
     
?>