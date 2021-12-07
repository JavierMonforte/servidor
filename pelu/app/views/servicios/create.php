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

    <h1>Alta de Servicio</h1>
    
    <form method="post" action="<?= PATH."servicios/store"?>">

    <div class="form-group">
        <label>Servicio</label>
        <input type="text" maxlength="50" name="servicio" class="form-control">
    </div>
    <div class="form-group">
        <label>Descripcion</label>
        <input type="text" maxlength="100" name="descripcion" class="form-control">
    </div>
    <div class="form-group">
        <label>Tipo de Servicio</label>
        <select name="tipoServicio" id="selectCreate" class="form-control">
      <optgroup>
        <?php 
        foreach ($tipos as $key => $value) {
          echo "<option value='".$value->id."'>$value->tipo</option>"; 
        }
        ?>
      </optgroup>
    </select>
    </div>
    <div class="form-group">
        <label>Precio</label>
        <input type="number" step=".01" name="precio" class="form-control">
    </div>
    <div class="form-group">
        <label>Genero</label>
        <input type="text" maxlength="50" name="genero" class="form-control">
    </div>
    <div class="form-group">
        <label>Tiempo</label>
        <input type="number" name="tiempo" class="form-control">
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
    </form>    
  </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>