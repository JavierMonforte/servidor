<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Lista de usuarios</h1>
      <table class="table table-striped table-hover">
        <tr>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Email</th>
          <th>F. nacimiento</th>
          <th></th>
        </tr>

        <?php foreach ($users as $key => $user) { ?>
          <tr>
          <td><?php echo $user->nombre ?></td>
          <td><?php echo $user->apellido ?></td>
          <td><?php echo $user->email ?></td>
          <td><?php echo $user->fechaNacimiento ? $user->fechaNacimiento->format('d-m-Y') : 'nonato' ?></td>
        
          </tr>
        <?php } ?>
      </table>

    </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>