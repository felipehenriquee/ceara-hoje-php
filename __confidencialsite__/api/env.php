<?php
function carregaEnv($caminho) {
    if (!file_exists($caminho)) {
        return;
    }

    foreach (file($caminho, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $linha) {
        $linha = trim($linha);
        if ($linha === '' || $linha[0] === '#' || strpos($linha, '=') === false) {
            continue;
        }

        list($chave, $valor) = explode('=', $linha, 2);
        $chave = trim($chave);
        $valor = trim($valor);
        $valor = trim($valor, "\"'");

        if (getenv($chave) === false) {
            putenv("$chave=$valor");
        }
    }
}

carregaEnv(__DIR__ . '/../../.env');
