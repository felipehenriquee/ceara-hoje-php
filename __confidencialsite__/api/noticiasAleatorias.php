<?php 
    
    function teste($connect, $id, $idAnterior = 0){
        $id_maior = mysqli_query($connect,"SELECT * FROM Noticia order by id desc limit 1");
        $aprovado = 0;
        $mostraId = mysqli_fetch_assoc($id_maior);
        while($aprovado==0){
            $idAleatorio= rand ( 7 , $mostraId["id"] );
            if ($idAleatorio!=$id and $idAleatorio!=$idAnterior){
                $valor_retorno = mysqli_query($connect, "SELECT * FROM Noticia WHERE id=$idAleatorio");
                $mostra = mysqli_fetch_assoc($valor_retorno);
                if ($mostra!=null){    
                    $aprovado=1;
                }         
            }   
        }
        return $mostra;
    }

?>