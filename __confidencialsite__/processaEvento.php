<?php 
    session_start();
    include("api/db.php");
    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    
    $linkImagem = filter_input(INPUT_POST, 'link-image', FILTER_SANITIZE_STRING);
    // $linkImagem = "teste";
    $organizador = filter_input(INPUT_POST, 'organizador', FILTER_SANITIZE_STRING);
    $dataEvento = filter_input(INPUT_POST, 'dataEvento', FILTER_SANITIZE_STRING);
    $conteudo = $_POST['conteudo'];
    $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_STRING);
    $resumo = filter_input(INPUT_POST, 'resumo', FILTER_SANITIZE_STRING);
    $localizacao = filter_input(INPUT_POST, 'localizacao', FILTER_SANITIZE_STRING);

    $tituloSemAcento =  preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $titulo ) );
    $tituloSemEspaco = preg_replace('<\W+>', "-", $tituloSemAcento); 
    $tituloConvertido = strtolower($tituloSemEspaco);
   

    $sql = "INSERT INTO eventos (titulo, conteudo, resumo, dataEvento, foto, tituloConvertido, organizador, preco, cidade, localizacao, createdAt, updatedAt) VALUES ('$titulo','$conteudo','$resumo','$dataEvento', '$linkImagem','$tituloConvertido','$organizador','$preco', '$cidade', '$localizacao', NOW(), NOW())";
    if (mysqli_query($connect, $sql)) {
        echo "New record created successfully";
        $_SESSION["cadastro_sucesso"] = true;
        header('Location: cadastro-evento-cidade');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }



   
   
    
?>
