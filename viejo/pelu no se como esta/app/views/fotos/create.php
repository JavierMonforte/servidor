<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">

    <h1>Alta de Foto</h1>
    
    <form method="post" enctype="multipart/form-data" action="<?=PATH."fotos/store"?>">
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control">
    </div>
    <div class="form-group">
        <label>Descripcion</label>
        <input type="text" name="descripcion" class="form-control">
    </div>
    <div class="form-group">
        <label>Imagen</label>
        <input type="file" name="archivo" class="form-control">
    </div>
    <div class="form-group">
        <label>Url</label>
        <input type="text" name="url" class="form-control">
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
    </form>    
  </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>