
<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Formularios</title>
</head><body>
    <p>
        <?php 
    echo "1. Crea un formulario para enviar los datos de registro de un libro:
        título, autor, editorial y páginas."?>
        </p>
        <h2>Registro de Libro</h2>

    <form method="POST" action="">
        <label>Titulo</label><input type="text" value="" name="titulo"><br>
        <label>Autor</label><input type="text" value="" name="autor"><br>
        <label>Editorial</label><input type="text" value="" name="editorial"><br>
        <label>paginas</label><input type="text" value="" name="paginas"><br>
        <input type="submit" value="enviar">
    </form>

    <h2>Mostrar los datos enviados</h2>
    <p><?php 
    if(isset($_POST) && !empty($_POST)){
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';
    }
     else {
        echo "No hemos recibido nada!";
    }
  
    ?>
    </p>
</body></html>
