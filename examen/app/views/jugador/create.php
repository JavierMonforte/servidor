<!doctype html>
<html lang="es">

<head>
  <?php require "app/views/parts/head.php" ?>
</head>

<body>

  <?php require "app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">

    <h1>Título</h1>
    <!--La fecha hay que ponerla en el formato correcto si no no funciona-->
    <form method="post" action="<?php echo isset($jugador) ? '/jugador/update' : '/jugador/store' ?>" enctype="multipart/form-data">
    <input type="hidden" name="id"
        value="<?php echo $jugador->id ?>">
      <label>nombre</label><input type="text" name="nombre" value="<?php echo $jugador->nombre ?>">
      <br><label>nacimiento</label><input type="text" name="nacimiento" value="<?php echo $jugador->nacimiento ? $jugador->nacimiento->format('Y-m-d') : 'nonato' ?>">
      <br><select name="puesto">
          <optgroup label="Puesto">
            <option value="Defensa" <?php echo $jugador->puesto == 'Defensa' ? "selected": "" ?>>Defensa</option>
            <option value="Portero"  <?php echo $jugador->puesto == 'Portero' ? 'selected': ""?>>Portero</option>
            <option value="Centrocampista"  <?php echo $jugador->puesto == 'Centrocampista' ? "selected": ""?>>Centrocampista</option>
            <option value="Delantero"  <?php echo $jugador->puesto == 'Defensa' ? "Delantero": ""?>>Delantero</option>
          </optgroup>
      </select>
      <br><label>archivo</label> <input type="file" name="archivo" value="<?php echo $jugador->url ?>">
      <br><label>titular</label><input type="text" name="titular" value="<?php echo $jugador->titular ?>">
      <br><button type="submit" class="btn btn-default">Enviar</button>

    </form>    
  </div>

  </main><!-- /.container -->
  <?php require "app/views/parts/footer.php" ?>

</body>
<?php require "app/views/parts/scripts.php" ?>

</html>