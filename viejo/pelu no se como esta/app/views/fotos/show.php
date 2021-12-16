<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
  <link rel="stylesheet" href="/app/css/show.css?i=<?=rand(1,100)?>">

</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Detalle del Servicio <?php echo $fotos->id ?></h1>
        <ul>
            <li><strong>Nombre: </strong><?php echo $fotos->nombre ?></li>
            <li><strong>Descripcion: </strong><?php echo $fotos->descripcion ?></li>
            <li><img src="<?php echo PATH.$fotos->url ?>" alt="<?php echo $foto->nombre?>"></li>
            <li><strong>Url: </strong><?php echo $fotos->url?></li>
        </ul>
    </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>