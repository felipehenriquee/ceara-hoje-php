<?php 
    $exibeCidadeNoticia = pegaCidadeNoticiaPorId($connect, $exibeNoticiaPorId['cidade']);
    
    
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    function data($data){
       
        $datinha = $data;
        $dataP = explode('-', $data);
        $dataParaExibir = $dataP[2].'/'.$dataP[1].'/'.$dataP[0];
        return $dataParaExibir;
        
        
    }
?>

<div class='container divPrincipal'>
    <div class="container caixaNoticia">
        <div class="container conteudoNoticia">
            <div class="caixaInfoNoticia">
                <a href="/municipios/<?php echo $exibeCidadeNoticia['nomecru'] ?>">
                    <?php echo  $exibeCidadeNoticia['nome'];?>

                </a>
            </div>
            <div class="caixaInfoNoticia">
                <h1>
                    <?php echo  $exibeNoticiaPorId['titulo'];?>

                </h1>
            </div>
            <div class="caixaInfoNoticia">
                <h2>
                    <?php echo  $exibeNoticiaPorId['resumo'];?>

                </h2>
            </div>
            <div class="caixaInfoNoticia noticiaData">
                <h3>
                     <?php echo  "Por ".$exibeNoticiaPorId['autor'];?>

                </h3>
                <h3>
                    <?php echo  data($exibeNoticiaPorId['createdAt']);?>

                </h3>
            </div>
            <div class="caixaInfoNoticia noticiaImagem">
                <img src ="<?php echo  $exibeNoticiaPorId['foto'];?>"/>
                    

                
            </div>
            <div class="caixaInfoNoticia noticiaConteudo">
                <p>
                    <?php echo  $exibeNoticiaPorId['conteudo'];?>

                </p>
                    

                
            </div>
            <div class="fb-like" data-href="<?php echo $_SERVER['REQUEST_URI']; ?>" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
            <div class="fb-comments" data-href="https://oportaldoceara.com.br/<?php echo $_SERVER['REQUEST_URI']; ?>" data-numposts="5" data-width=""></div>
            
        </div>
        
        
        
    </div>
</div>