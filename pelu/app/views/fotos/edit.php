<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">

    <h1>Edición de Fotos</h1>

    <form method="post" action="<?= PATH."fotos/update"?>">
        <input type="hidden" name="id"
        value="<?php echo $fotos->id ?>">

    <div class="form-group">
        <label>Servicio</label>
        <input type="text" name="nombre"  maxlength="50" class="form-control"
        value="<?php echo $fotos->nombre ?>"
        >
    </div>
    <div class="form-group">
        <label>descripcion</label>
        <input type="text"  maxlength="200" name="descripcion" class="form-control"
        value="<?php echo $fotos->descripcion ?>"
        >
    </div>
    <div class="form-group">
        <label>Foto</label>
        <input type="file" name="archivo" class="form-control"
        value="<?php echo $fotos->nombre?>"
        >
    </div>
    <div class="form-group">
        <label>Url</label>
        <input type="text" name="url"  maxlength="100" class="form-control"
        value="<?php echo $fotos->url ?>"
        >
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
    </form>
  </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>