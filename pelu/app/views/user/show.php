<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Detalle del usuario <?php echo $user->id ?></h1>
        <ul>
            <li><strong>Nombre: </strong><?php echo $user->nombre ?></li>
            <li><strong>Apellidos: </strong><?php echo $user->apellido ?></li>
            <li><strong>Email: </strong><?php echo $user->email ?></li>
            <li><strong>F. nacimiento: </strong><?php echo $user->fechaNacimiento->format('d-m-Y') ?></li>
            <li><strong>Password: </strong><?php echo $user->password ?></li>
            <li><strong>Active: </strong><?php echo $user->active ?></li>
            <li><strong>Admin: </strong><?php echo $user->admin ?></li>
            <li><strong>Servicios</strong>
            <?php 
            echo "<ul>";
            foreach ($user->lista() as $value) {
              echo "<li>";
              echo $value->typeServicio->servicio;
              echo "</li>";

            }
            echo "</ul>";
            ?>
          </li>
          </ul>
    </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>