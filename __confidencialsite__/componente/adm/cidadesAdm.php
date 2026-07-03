

<div>
    <div class="listaCidades">
        <?php 
        
            while($exibeTodasCidades = mysqli_fetch_assoc($resultTodasCidades)){
                $linkFotoAdm = $exibeTodasCidades['foto'];
                $linkPaginaCidade = "municipios/".$exibeTodasCidades['nomecru'];
                $linkPaginaEditarCidade = "editar_cidade/".$exibeTodasCidades['id'];
                echo 
                "<div class='cadaCidade'>
                        <div class='imagemCidadeAdm' style=background-image:url('".$linkFotoAdm."')></div>
                        

                    

                    <div class='tituloCidadeAdm'>
                        
                        <a href='".$linkPaginaCidade."'>".$exibeTodasCidades['nome']."</a>
                        <a href='".$linkPaginaEditarCidade."'>Editar</a>
                    </div>
                
                </div>";
            }
        ?>
    </div>    
</div>