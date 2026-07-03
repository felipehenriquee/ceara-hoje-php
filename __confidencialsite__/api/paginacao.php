<?php 
    include("db.php");
    // total de itens por pagina
    $itens_por_pagina = 10;
    mysqli_set_charset($connect,"utf8");
    // pagina atual
    $pag_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);
    

    $pagina = (!empty($pag_atual)) ? $pag_atual : 1;

    $inicio = ($itens_por_pagina * $pagina) - $itens_por_pagina;
    if ($URL[1] === 0){
        $resultado_noticia = mysqli_query($connect, "SELECT * FROM Noticia ORDER BY createdAt desc limit $inicio, $itens_por_pagina");
        $total_consult = mysqli_query($connect, "SELECT COUNT(id) as num_total from Noticia");
        $row_pg = mysqli_fetch_assoc($total_consult);
        // echo $row_pg['num_total'];
    }
    elseif ($URL[1] === 15){
        $resultado_noticia = mysqli_query($connect, "SELECT * FROM Noticia  where tipo = 10 or tipo = 11 ORDER BY createdAt desc limit $inicio, $itens_por_pagina");
        $total_consult = mysqli_query($connect, "SELECT COUNT(id) as num_total from Noticia where tipo = 10 or tipo = 11");
        $row_pg = mysqli_fetch_assoc($total_consult);
        // echo $row_pg['num_total'];
        
    }
    else {
        $resultado_noticia = mysqli_query($connect, "SELECT * FROM Noticia  where tipo = $URL[1] ORDER BY createdAt desc limit $inicio, $itens_por_pagina");
        $total_consult = mysqli_query($connect, "SELECT COUNT(id) as num_total from Noticia  where tipo = $URL[1]");
        $row_pg = mysqli_fetch_assoc($total_consult);
        // echo $row_pg['num_total'];
    }

    $qnt_pag = ceil($row_pg['num_total'] / $itens_por_pagina);
    // echo $qnt_pag;
    $max_link = 2;
    
    
    
    
    
    
    
?>