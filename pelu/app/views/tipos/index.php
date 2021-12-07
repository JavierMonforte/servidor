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
      <p><a href="<?= PATH."tipos/create/".$tipos->id ?>" class="btn btn-primary">Nuevo</a></p>
      <table class="table table-striped table-hover">
        <tr>
          <th>ID</th>
          <th>Tipo de Servicio</th>
          <th></th>
        </tr>

        <?php foreach ($tipos as $key => $tipo) { ?>
          <tr>
          <td><?php echo $tipo->id ?></td>
          <td><?php echo $tipo->tipo ?></td>
          <td>
          
            <a href="<?= PATH."tipos/show/".$tipo->id ?>" class="btn btn-primary">Ver </a>
            <a href="<?= PATH."tipos/edit/".$tipo->id ?>" class="btn btn-primary">Editar </a>
            <a href="<?= PATH."tipos/delete/".$tipo->id ?>" class="btn btn-primary">Borrar </a>
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