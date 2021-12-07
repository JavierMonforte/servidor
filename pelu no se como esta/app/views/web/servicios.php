<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Lista de Servicios</h1>
      <table class="table table-striped table-hover">
        <tr>
          <th>Servicio</th>
          <th>Descripcion</th>
          <th>Tipo de Servicio</th>
          <th>Precio</th>
          <th></th>
        </tr>

        <?php foreach ($servicios as $key => $servicio) { ?>
          <tr>
          <td><?php echo $servicio->servicio ?></td>
          <td><?php echo $servicio->descripcion ?></td>
          <td><?php echo $servicio->tipoServicio ?></td>
          <td><?php echo $servicio->precio ?></td>
          </tr>
        <?php } ?>
      </table>

    </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>