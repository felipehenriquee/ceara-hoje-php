<?php
    include('api/db.php');
    $pesquisaCru =  $titulo = filter_input(INPUT_POST, 'pesquisa', FILTER_SANITIZE_STRING);

    $tituloSemAcento =  preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $pesquisaCru ) );
    $tituloSemEspaco = preg_replace('<\W+>', "-", $tituloSemAcento); 
    $pesquisa = strtolower($tituloSemEspaco);
    
    mysqli_set_charset($connect,"utf8");
    $resultTodasCidades = mysqli_query($connect, "SELECT nome, id, nomecru FROM cidades where nomecru like '".$pesquisa."%' and id>0");
    

    echo "<ul class='tabelaNomeCidade'>";
    while($exibeTodasCidades = mysqli_fetch_assoc($resultTodasCidades)){
                echo "
                <li><a id='".$exibeTodasCidades['id']."' onmouseover='mudarCor(this.id)' onmouseout='voltarCor(this.id)' href='municipios/".$exibeTodasCidades['nomecru']."'>
                    ".$exibeTodasCidades['nome']."
                </a></li>
            ";
        }
    echo "</ul>";
    




?>