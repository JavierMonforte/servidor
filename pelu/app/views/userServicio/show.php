<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Servicios por Persona <?php ?></h1>
      <ul>
        <li><strong>Persona: </strong><?php echo $userServicio->typeUser->nombre ?></li>

        <li><strong>Servicio: </strong><?php echo $userServicio->typeServicio->servicio ?></li>

      </ul>
    </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>