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
      <p><a href="<?= PATH."servicios/create/".$servicios->idservicio ?>" class="btn btn-primary">Nuevo</a></p>

      <table class="table table-striped table-hover">
        <tr>
          <th>Servicio</th>
          <th>Descripcion</th>
          <th>Tipo de Servicio</th>
          <th>Precio</th>
          <th>Genero</th>
          <th>Tiempo</th>
          <th></th>
        </tr>

        <?php foreach ($servicios as $key => $servicio) { ?>
          <tr>
          <td><?php echo $servicio->servicio ?></td>
          <td><?php echo $servicio->descripcion ?></td>
          <td><?php echo $servicio->tipoServicio ?></td>
          <td><?php echo $servicio->precio ?></td>
          <td><?php echo $servicio->genero ?></td>
          <td><?php echo $servicio->tiempo ?></td>

          <td>
          
            <a href="<?= PATH."servicios/show/".$servicio->idservicio ?>" class="btn btn-primary">Ver </a>
            <a href="<?= PATH."servicios/edit/".$servicio->idservicio ?>" class="btn btn-primary">Editar </a>
            <a href="<?= PATH."servicios/delete/".$servicio->idservicio ?>" class="btn btn-primary">Borrar </a>
          </td>
          </tr>
        <?php } ?>
      </table>

    </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>