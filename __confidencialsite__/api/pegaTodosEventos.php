<?php 

    include("db.php");
    
    
    // $url = explode('/', $_SERVER['SCRIPT_URI']);
    mysqli_set_charset($connect,"utf8");

    $itensPorPagina = 3;
    if (isset($_GET['pagina'])){
        $pagina = intval($_GET['pagina']);
    }
    else{
        $pagina = 1;

    }
    $inicio = ($itensPorPagina * $pagina) - $itensPorPagina;
    
    if(!isset($URL[1])){
       
        $resultTodasNoticias = mysqli_query($connect, "SELECT * FROM eventos  ORDER BY createdAt ASC LIMIT $inicio, $itensPorPagina");
        $resultTotalNoticias = mysqli_query($connect, "SELECT id FROM eventos");
    }
    else{
        $IdCidadeFiltro = pegaIdCidade($connect, $URL[1]);
        $resultTodasNoticias = mysqli_query($connect, "SELECT * FROM eventos WHERE cidade =$IdCidadeFiltro ORDER BY createdAt ASC LIMIT $inicio, $itensPorPagina");
        $resultTotalNoticias = mysqli_query($connect, "SELECT id FROM eventos WHERE cidade =$IdCidadeFiltro");
        
        echo mysqli_error($connect);
    }
    $numeroDeLinhas = mysqli_num_rows($resultTodasNoticias);
    $numeroDeLinhasTotal = mysqli_num_rows($resultTotalNoticias);
    
    $numPaginas = ceil($numeroDeLinhasTotal /$itensPorPagina);
    
  
    function pegaCidade($connect, $idRecebido){
        mysqli_set_charset($connect ,"utf8");
        $resultTodasNoticias = mysqli_query($connect, "SELECT nomecru FROM cidades where id=$idRecebido");
        mysqli_error($connect);
        $exibeTodasNoticias = mysqli_fetch_assoc($resultTodasNoticias);
        return $exibeTodasNoticias['nomecru'];
    }
    function pegaIdCidade($connect, $nomeRecebido){
       
        mysqli_set_charset($connect ,"utf8");
        $resultTodasNoticias = mysqli_query($connect, "SELECT id FROM cidades where nomecru='$nomeRecebido'");
        echo mysqli_error($connect);
        $exibeTodasNoticias = mysqli_fetch_assoc($resultTodasNoticias);
        return $exibeTodasNoticias['id'];
    }
    
    
   
?>