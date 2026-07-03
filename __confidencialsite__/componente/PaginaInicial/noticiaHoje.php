<?php 
    
    error_reporting(E_ALL);
    
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    function data($data){
       
        $datinha = $data;
        $dataP = explode('-', $data);
        
        $dia = explode(' ', $dataP[2]);
        
        $dataParaExibir = $dia[0].'/'.$dataP[1].'/'.$dataP[0].' - '.$dia[1];
        return $dataParaExibir;
        
        
    }
?>


<div class="divMissao container-flex" id="inicio">
    <h1>O Portal do Ceará hoje</h1>
    <div class="conteudo container">
        
         
        <div class="textoNoticiaPrincipal">
            <?php 
                while($exibeTodasCidades = mysqli_fetch_assoc($noticiaPrincipal)){
                    $cidade = pegaCidadeNoticiaPrincipal($connect, $exibeTodasCidades['cidade']);
                    

                    echo "
                        <div class='noticiaPrincipal'>
                            <div class='noticiaImagemPrincipal'>
                               <a href='noticia/".$exibeTodasCidades['id']."'> <div class='fotoDaNoticia' style=background-image:url('".$exibeTodasCidades['foto']."')></div></a>
                            </div>
                            <div class='manchete'>
                                <div>
                                    <a href='municipios/".$exibeTodasCidades['cidade']."'><h3>".$cidade['nome']."</h3></a>
                                    <a href='noticia/".$exibeTodasCidades['id']."'><h1>".$exibeTodasCidades['titulo']."</h1></a>
                                </div>
                                <div>
                                    <a href='noticia/".$exibeTodasCidades['id']."'><h2>".$exibeTodasCidades['autor']." - ".data($exibeTodasCidades['createdAt'])."</h2></a>

                                </div>
                                
                                
                            </div>
                            
                        </div>
                    ";
                    
                }
            ?>
        </div>
        <div class="imagemLogo">
            
           <div>
           
                <?php 
                    $linkDaPropaganda = "https://www.ignisfit.com/";
                    $imagemDaPropaganda = "https://firebasestorage.googleapis.com/v0/b/o-portal-do-ceara.appspot.com/o/propagandas%2Fignis.jpg?alt=media&token=dbe4612f-9bf5-4b9b-ac05-c8b3c2792195";
                    include("__confidencialsite__/componente/propagandas/bannerHorizontal.php") 
                ?>
           </div>
           <div>
                
                <?php 
                
                    $linkDaPropaganda = "http://rodopublis.com.br/";
                    $imagemDaPropaganda = "https://firebasestorage.googleapis.com/v0/b/o-portal-do-ceara.appspot.com/o/propagandas%2FrodoPublisBannerHorizontal.jpg?alt=media&token=05d30e04-6160-4da7-b4f1-c4d438342e45";
                    include("__confidencialsite__/componente/propagandas/bannerPequeno.php") 
                ?>
           </div>
            
            
        </div> 
    </div>
</div>