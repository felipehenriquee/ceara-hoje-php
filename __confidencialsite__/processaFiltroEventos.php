<?php
    include("api/pegaTodasNoticias.php");
    
        header("Location: http://felipehenrique.tk/eventos/".pegaCidade($connect,$_POST['cidade']));


    

       

   

    exit();




?>