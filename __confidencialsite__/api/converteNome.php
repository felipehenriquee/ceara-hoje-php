<?php

    $listaPalavras = array(
                           0 => "todas-noticias",
                           1 => "fortaleza", 
                           2 => "maracanau",
                           3 => "caucaia",
                           4 => "juazeiro-norte",
                           5 => "sobral",
                           6 => "eusebio",
                           7 => "sao-goncalo",
                           8 => "aquiraz",
                           9 => "crato",
                           10 => "horizonte",
                           11 => "iguatu",
                           12 => "itapipoca",
                           13 => "porto-turismo",
                           14 => "sao-goncalo",
                           15 => "noticia"
                        );
    $listaPalavrasConvertidas = array(
                            0 => "Todas as Notícias",
                            1 => "Fortaleza", 
                            2 => "Maracanaú",
                            3 => "Caucaia",
                            4 => "Juazeiro do Norte",
                            5 => "Sobral",
                            6 => "Eusébio",
                            7 => "São Gonçalo",
                            8 => "Aquiraz",
                            9 => "Crato",
                            10 => "Horizonte",
                            11 => "Iguatu",
                            12 => "Itapipoca",
                            13 => "Porto e Turismo",
                            14 => "São Gonçalo",
                            15 => "Notícias"
                         );
    
    function converteNome($numeroRecebido){
         
    }
    function encontraPalavra($palavraRecebida, $listaPalavras){
        
        
        if (in_array($palavraRecebida, $listaPalavras)){
            return array_search($palavraRecebida, $listaPalavras);
        }
        else{
            return -1;
        }
        
    }
    

?>