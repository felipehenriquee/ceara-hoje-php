<?php 
    
    
    
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    function dat($data){
       
        $datinha = $data;
        $dataP = explode('-', $data);
        
        $dia = explode(' ', $dataP[2]);
        
        $dataParaExibir = $dia[0].'/'.$dataP[1].'/'.$dataP[0].' - '.$dia[1];
        return $dataParaExibir;
        
        
    }
?>


<div class="noticiasCidade container">
    
    <h1>Últimas Notícias</h1>
    
    <div class="divNoticias">
        <?php 

            while ($exibePrincipais = mysqli_fetch_assoc($principais)){
                $linkImg = $exibePrincipais['foto'];
                $linkNoticia = "/noticia/".$exibePrincipais['id'];
            
                echo 
                "<a class='linkNoticia' href='".$linkNoticia."'>
                    <div class='cadaNoticia'>
                        <div class='imgNoticia' style=background-image:url('".$linkImg."')>
    
                        </div>
                        <div class='tituloNoticia'>
                            <div>
                                <h3>".$exibe["nome"]."</h3>
                                <h2>".$exibePrincipais['titulo']."</h2>
                            </div>
                            <div>
                                <p>".$exibePrincipais['autor']." - ".dat($exibePrincipais['createdAt'])."</p>
                            </div>
                            
                        </div>
                    </div>
                </a>";
                
            
            };
            if (mysqli_num_rows($principais)>=6){
                echo "

                    <div class='divVejaMais'>
                        <a href='/noticias/".$exibe['nomecru']."'>Veja todas as notícia de ". $exibe['nome']."</a>

                    </div>";
            }
            
        ?>
        
        
        
    </div>

</div>