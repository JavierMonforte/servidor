<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Fotos</h1>
      <p><a href="<?= PATH."fotos/create/".$fotos->id ?>" class="btn btn-primary">Nuevo</a></p>

      <table class="table table-striped table-hover">
        <tr>
          <th>Nombre</th>
          <th>Descripcion</th>
          <th>Foto</th>
          <th>url</th>
          <th></th>
        </tr>

        <?php foreach ($fotos as $key => $foto) { ?>
          <tr>
          <td><?php echo $foto->nombre ?></td>
          <td><?php echo $foto->descripcion ?></td>
          <td><img src="<?php echo PATH.$foto->url?>" alt="<?php echo $foto->nombre ?>" style="width: 50px; height: 50px;"></td>
          <td><?php echo $foto->url ?></td>
          <td>
          
            <a href="<?= PATH."fotos/show/".$foto->id ?>" class="btn btn-primary">Ver </a>
            <a href="<?= PATH."fotos/edit/".$foto->id ?>" class="btn btn-primary">Editar </a>
            <a href="<?= PATH."fotos/delete/".$foto->id ?>" class="btn btn-primary">Borrar </a>
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