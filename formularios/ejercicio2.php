<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Formularios</title>
</head>

<body>
    <p>
        <?php
        echo "2. Crea un formulario para enviar el campo nombre.
    <br>a) Si el nombre existe se da un saludo.
    <br>b) Si no existe se vuelve atrás indicando que el campo es obligatorio. " ?>
    </p>
    <h2>Introduzca su Nombre</h2>

    <form method="POST" action="ejercicio2Action.php">
        <label>Nombre </label><input type="text" value="" name="nombre"><br>
        <input type="submit" value="enviar">
    </form>
</body>

</html>