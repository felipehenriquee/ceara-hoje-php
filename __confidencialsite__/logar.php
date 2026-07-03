<?php 
    session_start();
    include('api/db.php');
    if (empty($_POST['usuario']) || empty($_POST['senha'])){
        header("Location: home");
        exit();
    }

    $usuario = mysqli_real_escape_string($connect, $_POST['usuario']);
    $senha = mysqli_real_escape_string($connect, $_POST['senha']);

    $query = "select usuario, id  from usuarios where usuario = '$usuario' and senha = md5('$senha')";

    
    $resultadoDaConsulta = mysqli_query($connect, $query);

    
    $linhas = mysqli_num_rows($resultadoDaConsulta);
    
    if ($linhas == 1){
        $_SESSION['usuario'] = $usuario;
        header("Location: painel_adm");
        exit();
    }
    else{
        $_SESSION['nao_autenticado'] = true;
        
        header("Location: login"); 
        exit();
    }


?>




