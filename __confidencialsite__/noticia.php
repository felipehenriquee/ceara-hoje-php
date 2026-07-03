<?php 
    
    include("api/pegaNoticiaPorId.php");
    $exibeNoticiaPorId = pegaTudoNoticiaPorId($connect, $URL[1]);
    

  


?>
<!DOCTYPE html>

<html>
    <head>
        <?php include("componente/headGeral.php")?>
        <title>
            <?php
                echo $exibeNoticiaPorId['titulo'];
            ?>
        </title>
        <link type="text/css" rel="stylesheet" href="css/geral/cabecalho.css"/>
        
        <link type="text/css" rel="stylesheet" href="css/noticias/noticia.css"/>
        <link type="text/css" rel="stylesheet" href="../css/noticia/noticia.css"/>
        
        
        
        <link type="text/css" rel="stylesheet" href="../css/geral/rodape.css"/>
        <link type="text/css" rel="stylesheet" href="css/geral/navbar.css"/>
        <link type="text/css" rel="stylesheet" href="../css/geral/navbar.css"/>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        

        
        <style>
            body{
                
                font-family: 'Roboto', sans-serif;
            }
            

    
        </style>

    </head>
    
    
    <body>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v7.0"></script>
        
        <?php include('componente/geral/navbarNoticia.php') ?>
        <?php include('componente/noticia/noticiaComponente.php') ?>
        
        <?php include('componente/geral/rodape.php') ?>
       
       
        
        
        
        
    </body>
    


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    
</html>


