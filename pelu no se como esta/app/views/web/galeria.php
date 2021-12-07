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
<?php include("app/views/web/header.php");?>
<h2 class="galeria">Galeria de fotos</h2>

<div class="contenedor">

    <div class="fotos">
    <?php foreach ($fotos as $key => $foto) { ?>
     <div>
     <h3><?php echo $foto->nombre?></h3>  
     <img src="<?php echo PATH.$foto->url?>" data-image-hd="<?php echo PATH.$foto->url?>" alt="<?php echo $foto->nombre ?>"> 
     <p><?php echo $foto->descripcion?></p>
     </div>
     <?php } ?>

  </div>

</div>
</body>

</html>