<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="stylesheet" href="/app/css/menu.css">

</head>
<body>
<h2 class="titulo">Galeria de fotos</h2>

<div class="contenedor">

    <div class="fotos">
    <?php foreach ($fotos as $key => $foto) { ?>
     <div class="galeria">
     <h3><?php echo $foto->nombre?></h3>  
     <img class="imagen" src="<?php echo PATH.$foto->url?>" data-image-hd="<?php echo PATH.$foto->url?>" alt="<?php echo $foto->nombre ?>"> 
     <p class="descripcion"><?php echo $foto->descripcion?></p>
     </div>
     <?php } ?>

  </div>

</div>
</body>

</html>