<?php


?>


<meta charset="UTF-8">
<meta name="description" <?php echo "content='" . $exibe['resumo'] . "'"; ?>>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- <meta property="og:url"           content="<?php //echo $_SERVER['SCRIPT_URI'] ?>" />  -->
<meta property="og:url"           content="<?php echo $_GET['url'] ?>" /> 
<meta property="og:type"          content="website" />
<meta property="og:title"         content="<?php echo $exibeNoticiaPorId['titulo'] ?>" />
<meta property="og:description"   content="<?php echo $exibeNoticiaPorId['resumo'] ?>" />
<meta property="og:image"         content="<?php echo $exibeNoticiaPorId['foto'] ?>" />
<link rel="shortcut icon" href="favicon.ico" >

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">

