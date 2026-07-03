<?php 
    
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

<div class="container-flex">
    <div class="container divInfo">
        <div class="container infoCidade"> 
            <h3>
            <b></b><i> <?php echo $exibe['apelido'] ?> </i></b>
            </h3>
            <p>
                <?php echo $exibe['resumo'] ?>
            </p>
            <p><br>
                <b>Mesorregião:</b> <?php echo $exibe['mesorregiao'] ?><br>
                <b>Microrregião:</b> <?php echo $exibe['microrregiao'] ?><br>
                <b>Área:</b> <?php echo $exibe['area'] ?> km²<br>
                <b>População em 2019 estimada pelo IBGE:</b> <?php echo $exibe['populacao'].' habitantes' ?>  <br>
                <b>Municípios Limitrófes:</b> <?php echo $exibe['limite'] ?> <br>
                <b>Aniversário da Cidade:</b> <?php  echo data($exibe['aniversario']) ?> <br>
        
            </p>
        </div>
        <div class="infoPropaganda">
                <div>
                
                <?php 
                    $linkDaPropaganda = "https://www.ignisfit.com/";
                    $imagemDaPropaganda = "https://firebasestorage.googleapis.com/v0/b/o-portal-do-ceara.appspot.com/o/propagandas%2Fignis.jpg?alt=media&token=dbe4612f-9bf5-4b9b-ac05-c8b3c2792195";
                    include("__confidencialsite__/componente/propagandas/bannerHorizontal.php") 
                ?>
            </div>
            <div>
                
                <?php 
                    $linkDaPropaganda = "https://www.ignisfit.com/";
                    $imagemDaPropaganda = "https://zontalimp.com.br/wp-content/uploads/2017/04/etapa-01-300x260.png";
                    include("__confidencialsite__/componente/propagandas/bannerHorizontal.php") 
                ?>
            </div>
        </div>   
    </div>
</div>
    