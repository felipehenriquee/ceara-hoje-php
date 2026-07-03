<?php 
    session_start();
    include("api/verifica_login.php");
    include("api/pegaTodasCidades.php");  






?>
<!DOCTYPE html>

<html>
    <head>
        <?php include("componente/headGeral.php")?>
        <title>Painel - O Portal do Ceará </title>
        <link type="text/css" rel="stylesheet" href="css/geral/cabecalho.css"/>
        <link type="text/css" rel="stylesheet" href="css/adm/cidadeAdm.css"/>
        
        
        <link type="text/css" rel="stylesheet" href="css/geral/rodape.css"/>
        <link type="text/css" rel="stylesheet" href="css/geral/navbar.css"/>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>

        
        <style>
            body{
                font-family: 'Roboto', sans-serif;
            }
    
        </style>

    </head>
    
    
    <body>
        <?php //include("componente/geral/navbar.html") ?>

       <h1>Bem Vindo <?php echo $_SESSION['usuario']; ?></h1>
        <a href="cadastro_cidade"> cadastro de cidades</a><br>
        <a href="cadastro-noticia-cidade"> cadastro de notícias</a><br>
        <a href="cadastro-evento-cidade"> cadastro de eventos</a><br>
        <a href="ver-noticias"> ver notícias</a><br>
        <div class="container">
            <?php include("componente/adm/cidadesAdm.php") ?>
        </div>
        <a href="logout"> Sair</a>
        
    </body>
    


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    
</html>


