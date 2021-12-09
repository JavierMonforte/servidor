<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Lista de jugadores</h1>
      <p>
      <a href="jugador/create" class="btn btn-primary">Nuevo</a>
      <a href="jugador/titulares" class="btn btn-primary">titulares</a>        
      </p>
      <table class="table table-striped table-hover">
        <tr>
          <th>Nombre</th>
          <th>Nacimiento</th>
          <th>Puesto</th>
          <th>Url</th>
          <th>Titular</th>
          <th>Foto</th>
          <th></th>

        </tr>
        <?php foreach ($jugadores as $key => $jugador) { ?>
          <tr>
          <td><?php echo $jugador->nombre ?></td>
          <td><?php echo $jugador->nacimiento ? $jugador->nacimiento->format('d-m-Y') : 'nonato' ?></td>
          <td><?php echo $jugador->puesto ?></td>
          <td><?php echo $jugador->url ?></td>
          <td><?php echo $jugador->titular ?></td>
          <td><img src="<?= $jugador->url ?>" alt="" width="50px" height="50px"></td>
          <td>
          
            <a href="<?= PATH."jugador/titular/".$jugador->id ?>" class="btn btn-primary">Titular </a>
            <a href="<?= PATH."jugador/edit/".$jugador->id ?>" class="btn btn-primary">Editar </a>
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