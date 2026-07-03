<?php 
    session_start();
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    function data($data){
       
        $datinha = $data;
        $dataP = explode('-', $data);
        $dataParaExibir = $dataP[2].'-'.$dataP[1].'-2020';
        
        return utf8_encode(strftime('%d de %B', strtotime($dataParaExibir)));
        
    }
    if (ISSET($_SESSION['usuario'])){
        
        echo "<a href='http://localhost/portalceara/editar_cidade/".$exibe['id']."'>editar</a>";
    }
    
?>