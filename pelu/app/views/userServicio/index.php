<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Servicios por persona</h1>
      <p><a href="<?= PATH."userServicio/create/".$userServicio->id ?>" class="btn btn-primary">Nuevo</a></p>

      <table class="table table-striped table-hover">
        <tr>
          <th>Persona</th>
          <th>Servicio</th>
          <th></th>
        </tr>

        <?php foreach ($userServicio as $key => $value) { ?>
          <tr>
          <td><?php echo $value->typeUser->nombre ?></td>
          <td><?php echo $value->typeServicio->servicio ?></td>

          <td>
          
            <a href="<?= PATH."userServicio/show/".$value->id ?>" class="btn btn-primary">Ver </a>
            <a href="<?= PATH."userServicio/edit/".$value->id ?>" class="btn btn-primary">Editar </a>
            <a href="<?= PATH."userServicio/delete/".$value->id ?>" class="btn btn-primary">Borrar </a>
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