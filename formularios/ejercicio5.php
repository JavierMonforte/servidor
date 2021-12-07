<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Formularios</title>
</head><body>
    <p>
        <?php 
    echo "5. Crea un formulario que envíe un array de 3 nombres. Para hacerlo debes usar el mismo nombre en todos
    los input (name =”nombres[]”). "?>
        </p>
        <h2>Array de Nombres</h2>

    <form method="POST" action="">
        <label>Nombre 1 </label><input type="text" value="" name="nombres[]"><br>
        <label>Nombre 2 </label><input type="text" value="" name="nombres[]"><br>
        <label>Nombre 3 </label><input type="text" value="" name="nombres[]"><br>
        <input type="submit" value="enviar">
    </form>

    <h2>Mostrar los datos enviados</h2>
    <p><?php 
    if(isset($_POST) && !empty($_POST)){
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';

        echo "<br>nombre 2  " . $_POST['nombres'][1];
    }
     else {
        echo "No hemos recibido nada!";
    }
  
    ?>
    </p>
</body></html>
