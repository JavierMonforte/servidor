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

    <h1>Alta de Tipos</h1>
    
    <form method="post" action="<?= PATH."tipos/store"?>">

    <div class="form-group">
        <label>Tipo de Servicio</label>
        <input type="text" name="tipo" class="form-control">
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
    </form>    
  </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>