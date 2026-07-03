<?php 
    session_start();
    include('api/db.php');
    header("Content-Type: text/html; charset=utf-8");
    $nomeCidade = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $resumoCidade =  $_POST['resumo'];
    $areaCidade =  filter_input(INPUT_POST, 'area', FILTER_SANITIZE_STRING);
    $limiteCidade =  filter_input(INPUT_POST, 'limite', FILTER_SANITIZE_STRING);
    $pibCidade =  filter_input(INPUT_POST, 'pib', FILTER_SANITIZE_STRING);
    $populacaoCidade =  filter_input(INPUT_POST, 'populacao', FILTER_SANITIZE_STRING);
    $aniversarioCidade =  filter_input(INPUT_POST, 'aniversario', FILTER_SANITIZE_STRING);
    $nomeSemAcento = filter_input(INPUT_POST, 'nomea', FILTER_SANITIZE_STRING);
    $apelido = filter_input(INPUT_POST, 'apelido', FILTER_SANITIZE_STRING);
    $mesorregiao = filter_input(INPUT_POST, 'mesorregiao', FILTER_SANITIZE_STRING);
    $microrregiao = filter_input(INPUT_POST, 'microrregiao', FILTER_SANITIZE_STRING);
    
    // $nomeCidade = "ADFSDFAFDSSDF"
    // $resumoCidade = "dfasdffasdf";
    // $areaCidade = 12312312;
    // $limiteCidade = "ADFSDFAFDSSDF"
    // $pibCidade = 32123;
    // $populacaoCidade = 312312;
    // $aniversarioCidade = 31231;
   
    $select = mysqli_query($connect, "UPDATE cidades SET nome = '$nomeCidade', resumo = '$resumoCidade' , area = '$areaCidade',
    limite = '$limiteCidade', populacao = '$populacaoCidade', aniversario = '$aniversarioCidade', nomecru = '$nomeSemAcento', mesorregiao = '$mesorregiao', microrregiao='$microrregiao', apelido='$apelido',updatedAt = NOW() WHERE id='$pibCidade'");
    
 if($select){
      if(mysqli_affected_rows($connect) > 0){
        header('Location: editar_cidade/'.$pibCidade);
      } else {
        print "consulta efetuada, mas nenhuma linha modificada";
      }
   }else{ 
      die("Erro: " . mysqli_error($connect));
   }
    
    $connect ->close();
    
   
    

?>