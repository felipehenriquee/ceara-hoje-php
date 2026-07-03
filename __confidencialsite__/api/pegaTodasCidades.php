<?php 

    include("db.php");
    
    
    // $url = explode('/', $_SERVER['SCRIPT_URI']);
    
    
    mysqli_set_charset($connect,"utf8");
    $resultTodasCidades = mysqli_query($connect, "SELECT * FROM cidades  ORDER BY nome ASC");
    
    function pegaCidadeNoticiaPrincipal($connect, $idRecebido){
       
        mysqli_set_charset($connect ,"utf8");
        $resultTodasNoticias = mysqli_query($connect, "SELECT *  FROM cidades where id=$idRecebido LIMIT 1");
        
        
        mysqli_error($connect);
        $exibeTodasNoticias = mysqli_fetch_assoc($resultTodasNoticias);
        return $exibeTodasNoticias;
    }
    
   
?>