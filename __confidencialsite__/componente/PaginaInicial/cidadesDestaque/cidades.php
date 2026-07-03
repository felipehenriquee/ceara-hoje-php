<?php
function limita_caracteres($texto, $limite, $quebra = true) {
    $tamanho = strlen($texto);

    // Verifica se o tamanho do texto é menor ou igual ao limite
    if ($tamanho <= $limite) {
        $novo_texto = $texto;
    // Se o tamanho do texto for maior que o limite
    } else {
        // Verifica a opção de quebrar o texto
        if ($quebra == true) {
            $novo_texto = trim(substr($texto, 0, $limite)).'... <b>Clique no município para Ler Mais</b>';
        // Se não, corta $texto na última palavra antes do limite
        } else {
            // Localiza o útlimo espaço antes de $limite
            $ultimo_espaco = strrpos(substr($texto, 0, $limite), ' ');
            // Corta o $texto até a posição localizada
            $novo_texto = trim(substr($texto, 0, $ultimo_espaco)).'... Clique no município para Ler Mais';
        }
    }

    // Retorna o valor formatado
    return $novo_texto;
}
?>




<div class="destaqueTexto">
    <div id="cidade0" class="cidadeAtivada">
        
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
            <br><br>
            
        </p>
    </div>
    <?php 
        while($exibeTodasCidades = mysqli_fetch_assoc($resultTodasCidades)){
            $idAtual = $exibeTodasCidades['id'];
            echo 
            "<div id='cidade".$idAtual."' class='cidadeDesativada'>
                <h1>".$exibeTodasCidades['nome']."</h1>
                <p>".
                    limita_caracteres($exibeTodasCidades['resumo'],500)."

                </p>
            </div>";
            
        }
    
    ?>

    
    
</div>