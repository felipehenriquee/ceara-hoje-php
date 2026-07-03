<?php 
    session_start();
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    function data($data){
       
        $datinha = $data;
        $dataP = explode('-', $data);
        $dataParaExibir = $dataP[2].'/'.$dataP[1].'/'.$dataP[0];
        return $dataParaExibir;
        
        
    }

    

    
    
?>

<div class="paginaNoticias">
    <div class="menuCimaNoticias">
        <div class='tituloPaginaNoticias'>
            <?php 
                if (!isset($URL[1])){
                    echo "<h1>Eventos no Ceará</h1>";
                }
                else{
                    echo "<h1>Eventos em ".$URL[1]."</h1>";
                }
                
            ?>
            
        </div>
        <div class="filtrosNoticias">
            <form method="POST" action="/processaFiltroEventos"  enctype="multipart/form-data" id="form-noticia">
                    
                    <select name="cidade" class="form-control" required style="margin-bottom:20px">
                        
                        <option value="" selected disabled hidden>Filtrar evento por cidade</option>
                        
                        <?php 
        
                            while($exibeTodasCidades = mysqli_fetch_assoc($resultTodasCidades)){
                                echo "<option value='".$exibeTodasCidades['id']."'>".$exibeTodasCidades['nome']."</option>";
                            }
                        ?>
                    </select>
                    <button class="btn btn-primary">FILTRAR</button>
    
                            
                            
    
            </form>
            
        </div>
    </div>
   
    
    <div class="conteudoPaginaNoticias">
        <div class="listaNoticias">
            <?php 
            
                while($exibeTodasNoticias = mysqli_fetch_assoc($resultTodasNoticias)){
                    $linkFotoNoticia = $exibeTodasNoticias['foto'];
                    $linkPaginaNoticia = "municipios/".$exibeTodasNoticias['tituloConvertido'];
                    $linkPaginaCidade = "municipios/".$exibeTodasNoticias['cidade'];
                    echo 
                    "<div class='cadaNoticia'>
                        <div class='imagemNoticia' style=background-image:url('".$linkFotoNoticia."')></div>
                            

                        

                        <div class='tituloNoticia'>
                            <a class='linkCidadeNoticia' href='".$linkPaginaCidade."'>".pegaCidade($connect, $exibeTodasNoticias['cidade'])."</a>
                            <a class='linkTituloNoticia' href='".$linkPaginaNoticia."'>".$exibeTodasNoticias['titulo']."</a>
                            
                        </div>
                        <div class='dataNoticia'>
                            <p>"
                                .data($exibeTodasNoticias['createdAt'])."

                            </p>
                        </div>
                        <hr/>
                    </div>
                    
                    ";
                }
            ?>
            <nav aria-label="Navegação de página exemplo">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="?pagina=1">Início</a></li>
                    <?php for($i= $pagina-3; $i <=$pagina - 1; $i++){ 
                    $estilo = "";
                    if ($pagina == $i){
                        $estilo = "active";
                    }
                    if($i >= 1){

                    
                    ?>
                    <li class="page-item <?php echo $estilo; ?>"><a class="page-link" href="?pagina=<?php echo $i ?>"><?php echo $i; ?></a></li>
                        
                    
                    <?php }} ?>


                    <li class="page-item active"><a class="page-link" href="?pagina=<?php echo $i ?>"><?php echo $pagina; ?></a></li>
                    
                    
                    <?php for($i= $pagina+1; $i <$pagina + 3; $i++){ 
                    $estilo = "";
                    if ($pagina == $i){
                        $estilo = "active";
                    }
                    if($i <= $numPaginas){

                    
                    ?>
                    <li class="page-item <?php echo $estilo; ?>"><a class="page-link" href="?pagina=<?php echo $i ?>"><?php echo $i; ?></a></li>
                        
                    
                    <?php }} ?>
                    <li class="page-item"><a class="page-link" href="?pagina=<?php echo $numPaginas-1 ?>">Última</a></li>
                </ul>
            </nav>
        </div>
        <div class="outrosConteudosPaginaNoticias"></div>    
    </div>
    
</div>