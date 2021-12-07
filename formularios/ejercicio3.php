<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formularios</title>
</head>
<body>
    <p>
    3. Envío del script al mismo script. Crea un formulario para enviar el campo nombre.
    <br>a) El nombre debe existir y tener una longitud mínima de 3 caracteres.
    <br>b) Si es válido se da un saludo.
    <br>c) Si no lo es vuelve a mostrar el formulario indicando que el campo es obligatorio y mostrando en
el “input” el valor anterior no válido. 
    </p>
    <h2>Introduzca su Nombre</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        <label>Nombre </label><input type="text" value="<?php $_POST['nombre']?>" name="nombre"><br>
        <input type="submit" value="enviar"> <br>
    </form>
    <p>
    <?php
    if(isset($_POST) && !empty($_POST)){
        
        $nombre = $_POST['nombre'];
        $nletras = strlen($nombre);


        if($nletras > 3){
            echo "<p>Hola  " . $nombre ."</p>";
        } else {
            echo "<p>El campo nombre es obligatorio La lon</p>";
        }
                
    } 
?>
</p>
</body>
</html>