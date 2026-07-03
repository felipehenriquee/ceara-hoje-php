<?php 
    include("api/pegaCidade.php");
    session_start();

    include("api/novasNoticias.php");
    include("api/novosEventos.php");

  


?>
<!DOCTYPE html>

<html>
    <head>
        <?php include("componente/headGeral.php")?>
        <title><?php echo $exibe['nome'] ?> - O Portal do Ceará </title>
        <link type="text/css" rel="stylesheet" href="../css/propaganda/propaganda.css"/>
        <link type="text/css" rel="stylesheet" href="../css/cidades/capa.css"/>
        <link type="text/css" rel="stylesheet" href="../css/cidades/info.css"/>
        <link type="text/css" rel="stylesheet" href="../css/cidades/noticias.css"/>
        <link type="text/css" rel="stylesheet" href="../css/cidades/evento.css"/>
        
        
        
        <link type="text/css" rel="stylesheet" href="../css/geral/rodape.css"/>
        <link type="text/css" rel="stylesheet" href="../css/geral/navbar.css"/>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        

        
        <style>
            body{
                
                font-family: 'Roboto', sans-serif;
            }
            

    
        </style>

    </head>
    
    
    <body>
        
        <?php include("componente/geral/navbarCidade.php") ?>
        <?php include("componente/municipios/capa.php") ?> 
        
        <?php 
            $imagemDaPropaganda = "https://firebasestorage.googleapis.com/v0/b/o-portal-do-ceara.appspot.com/o/propagandas%2FportoPecemSuperBanner.jpg?alt=media&token=e98759b3-e912-4195-99c6-e250840a30e8";
            $linkDaPropaganda = "https://jornalportodopecem.com.br/";
            include("componente/propagandas/superBanner.php") 
        ?>
        

        <div class="container-flex" id="cidade">
            <?php include("componente/municipios/info.php") ?>  

        </div> 
        <?php 
            $linkDaPropaganda = "https://jornalportodopecem.com.br/";
            $imagemDaPropaganda = "https://www.mafans.com/wp-content/uploads/2019/08/1100x160-Cashback.gif";
       
            include("componente/propagandas/superBanner.php") 
        ?>
        
        <div class="container-flex" id="noticias">
            <?php include("componente/municipios/noticia.php") ?>  

        </div>
        <?php 
            $imagemDaPropaganda = "https://firebasestorage.googleapis.com/v0/b/o-portal-do-ceara.appspot.com/o/propagandas%2FportoPecemSuperBanner.jpg?alt=media&token=e98759b3-e912-4195-99c6-e250840a30e8";
            $linkDaPropaganda = "https://jornalportodopecem.com.br/";
            include("componente/propagandas/superBanner.php") 
        ?>
        <div class="container-flex" id="eventos">
            <?php include("componente/municipios/evento.php") ?>  

        </div>
        <?php 
            $linkDaPropaganda = "https://jornalportodopecem.com.br/";
            $imagemDaPropaganda = "https://www.mafans.com/wp-content/uploads/2019/08/1100x160-Cashback.gif";
       
            include("componente/propagandas/superBanner.php") 
        ?>
        <?php include("componente/geral/rodape.php") ?>  
        
        
    </body>
    


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    
</html>


