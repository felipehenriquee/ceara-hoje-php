<?php 

    include("db.php");
    
    
    // $url = explode('/', $_SERVER['SCRIPT_URI']);
    
    
    
    mysqli_set_charset($connect,"utf8");
    function pegaTudoNoticiaPorId($connect, $idRecebidoNoticiaPorId ){
        $resultNoticiaPorId = mysqli_query($connect, "SELECT * FROM noticias where id=$idRecebidoNoticiaPorId");
        $exibeNoticiaPorId = mysqli_fetch_assoc($resultNoticiaPorId);
        return $exibeNoticiaPorId;
    }
    function pegaTituloConvertido($connect, $idRecebido){
        $resultNoticiaPorId = mysqli_query($connect, "SELECT tituloConvertido, cidade FROM noticias where id=$idRecebido");
        $exibeNoticiaPorId = mysqli_fetch_assoc($resultNoticiaPorId);
        return $exibeNoticiaPorId;
    }
    
    
    function pegaCidadeNoticiaPorId($connect, $idRecebido){
        mysqli_set_charset($connect ,"utf8");
        $resultTodasNoticias = mysqli_query($connect, "SELECT nomecru, nome FROM cidades where id=$idRecebido");
        mysqli_error($connect);
        $exibeTodasNoticias = mysqli_fetch_assoc($resultTodasNoticias);
        return $exibeTodasNoticias;
    }
    function verificaSeTemNoBancoNoticiaPorId($connect, $nomeRecebido){
        mysqli_set_charset($connect ,"utf8");
        $resultTodasNoticias = mysqli_query($connect, "SELECT id FROM cidades where nomecru='$nomeRecebido'");
        mysqli_error($connect);
        $exibeTodasNoticias = mysqli_num_rows();
        return $exibeTodasNoticias['nomecru'];
    }
    
    
   
?>