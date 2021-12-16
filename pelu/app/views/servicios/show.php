<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Detalle del Servicio <?php echo $servicios->idservicio ?></h1>
        <ul>
            <li><strong>Servicio: </strong><?php echo $servicios->servicio ?></li>
            <li><strong>Descripcion: </strong><?php echo $servicios->descripcion ?></li>
            <li><strong>Tipo de Servicio: </strong><?php echo $servicios->tipo ?></li>
            <li><strong>Precio: </strong><?php echo $servicios->precio?></li>
            <li><strong>Genero: </strong><?php echo $servicios->genero?></li>
            <li><strong>Tiempo: </strong><?php echo $servicios->tiempo?></li>
            <li><strong>Personal</strong>
            <?php 
            echo "<ul>";
            foreach ($servicios->trabajadores() as $value) {
              echo "<li>";
              echo $value->typeUser->nombre;
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