<?php 
    session_start();
    include('api/db.php');

    $nomeCidade = mysqli_real_escape_string($connect, trim($_POST['nome']));
    $resumoCidade =$_POST['resumo'];
    $areaCidade = mysqli_real_escape_string($connect, trim($_POST['area']));
    $limiteCidade = mysqli_real_escape_string($connect, trim($_POST['limite']));
    $pibCidade = mysqli_real_escape_string($connect, trim($_POST['pib']));
    $populacaoCidade = mysqli_real_escape_string($connect, trim($_POST['populacao']));
    $aniversarioCidade = mysqli_real_escape_string($connect, trim($_POST['aniversario']));
    $apelidoCidade = mysqli_real_escape_string($connect, trim($_POST['apelido']));
    $mesorregiaoCidade = mysqli_real_escape_string($connect, trim($_POST['mesorregiao']));
    $microrregiaoCidade = mysqli_real_escape_string($connect, trim($_POST['microrregiao']));
    $imagemCidade = mysqli_real_escape_string($connect, trim($_POST['link-image']));


    $tituloSemAcento =  preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $nomeCidade ) );
    $titulo_novo = preg_replace('<\W+>', "-", $tituloSemAcento); 
    $nomeMinusculo = strtolower($titulo_novo);

    $queryCadastroCidade = "INSERT INTO cidades (nome, resumo, area, limite, id, populacao, aniversario, nomecru, apelido, mesorregiao, microrregiao, foto, data_registro, updatedAt) VALUES('$nomeCidade',
    '$resumoCidade', '$areaCidade', '$limiteCidade', '$pibCidade','$populacaoCidade', '$aniversarioCidade', 
    '$nomeMinusculo', '$apelidoCidade', '$mesorregiaoCidade','$microrregiaoCidade', '$imagemCidade', NOW(), NOW())";
    
    if($connect->query($queryCadastroCidade) === TRUE){

        $_SESSION["cadastro_sucesso"] = true;
        
        
    }
    
    
    
    $connect ->close();
    header('Location: cadastro_cidade');

?>