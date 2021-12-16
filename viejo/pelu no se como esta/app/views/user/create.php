<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
  <link rel="stylesheet" href="/app/css/formulario2.css?i=<?=rand(1,100)?>">

</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">

    <h1>Alta de usuario</h1>
    
    <form method="post" action="<?= PATH."users/store"?>">

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label>Apellidos</label>
        <input type="text" name="surname" class="form-control">
    </div>
    <div class="form-group">
        <label>F. nacimiento</label>
        <input type="text" name="birthdate" class="form-control">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label>password</label>
        <input type="text" name="password" class="form-control"
        value="<?php echo $user->password ?>"
        >
    </div>
    <div class="form-group">
        <label>active</label>
        <input type="text" name="active" class="form-control"
        value="<?php echo $user->active ?>"
        >
    </div>
    <div class="form-group">
        <label>Admin</label>
        <input type="text" name="admin" class="form-control"
        value="<?php echo $user->admin ?>"
        >
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
    </form>    
  </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>