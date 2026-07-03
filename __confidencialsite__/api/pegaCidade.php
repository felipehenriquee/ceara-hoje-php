<?php 
    include("db.php");

    mysqli_set_charset($connect,"utf8");
    
    if (is_numeric($URL[1])){
        $id = $URL[1];
    }
    else{
        $resultId = mysqli_query($connect, "SELECT id FROM cidades WHERE nomecru='$URL[1]'");
        
        $numeroDeLinhas = mysqli_num_rows($resultId);
    
        if ($numeroDeLinhas > 0){
            $exibeId = mysqli_fetch_assoc($resultId);
            $id = $exibeId['id'];
        }
        else{
            echo "nao tem no bd";
        }
    }
   

    
    $result= mysqli_query($connect, "SELECT * FROM cidades WHERE id=$id");
    $exibe = mysqli_fetch_assoc($result);
    
    
?>