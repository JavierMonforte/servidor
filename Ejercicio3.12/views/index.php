<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Colores coockies</title>
    <link rel="stylesheet" href="./css/estilos.css">

</head>

<body style="background-color:<?= $color ?>">
    <h1>BIENVENIDO</h1>
    <form action="?method=cambio" method="post">
        <select name="color" id="seleccionarColor">
            <optgroup name="cambio" label="cambio de colores">
                <option value="red">Rojo</option>
                <option value="blue">Azul</option>
                <option value="green">Verde</option>
                <option value="yellow">amarillo</option>
            </optgroup>
        </select>
        <input type="submit" value="cambiar">
    </form>

</body>

</html>