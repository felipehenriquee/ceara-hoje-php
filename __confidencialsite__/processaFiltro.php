<?php
    include("api/pegaTodasNoticias.php");
    
        header("Location: http://felipehenrique.tk/noticias/".pegaCidade($connect,$_POST['cidade']));


    

       

   

    exit();




?>