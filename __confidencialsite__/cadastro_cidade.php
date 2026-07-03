<?php 
    session_start();
    include("api/verifica_login.php")




?>
<!DOCTYPE html>

<html>
    <head>
        <?php include("componente/headGeral.php")?>
        <title>Página Inicial - O Portal do Ceará </title>
        <link type="text/css" rel="stylesheet" href="css/geral/cabecalho.css"/>
        <link type="text/css" rel="stylesheet" href="css/adm/cadastroNoticia.css"/>
        
        
        <link type="text/css" rel="stylesheet" href="css/geral/rodape.css"/>
        <link type="text/css" rel="stylesheet" href="css/geral/navbar.css"/>
        <link type="text/css" rel="stylesheet" href="css/adm/bulma.min.css"/>
        
        
        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.js"></script>

        
        <style>
            body{
                font-family: 'Roboto', sans-serif;
            }
    
        </style>

    </head>
    
    
    <body>
        <?php //include("componente/geral/navbar.html") ?>
        <?php include("componente/adm/cadastroCidadeComponente.php") ?>
            
        <script>
            $(document).ready(function() {
                $('#summernote').summernote();
            });
        </script>
        
    </body>
    
    <script src="https://www.gstatic.com/firebasejs/7.8.1/firebase-app.js"></script>

    
    <script src="https://www.gstatic.com/firebasejs/7.8.1/firebase-analytics.js"></script>

    <script src="https://www.gstatic.com/firebasejs/7.8.1/firebase-storage.js"></script>
    <?php include("componente/geral/firebaseConfig.php") ?>
    <script src="js/upImage.js"></script>

   
    
</html>


