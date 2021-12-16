<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
  <link rel="stylesheet" href="/app/css/formulario2.css?i=<?=rand(1,100)?>">

</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">

    <h1>Edición de Tipo de Servicio</h1>

    <form method="post" action="<?= PATH."tipos/update"?>">
        <input type="hidden" name="id"
        value="<?php echo $tipos->id ?>">

    <div class="form-group">
        <label>Tipo de Servicio <?php echo $tipos->id ?></label>
        <input type="text" maxlength="50"  name="tipo" class="form-control"
        value="<?php echo $tipos->tipo ?>"
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