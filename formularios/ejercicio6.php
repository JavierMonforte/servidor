<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Formularios</title>
</head>

<body>
    <p>
    6. Realiza un minicuestionario con 5 preguntas tipo test sobre las asignaturas que se imparten en el curso.
Cada pregunta acertada sumará un punto. El programa mostrará al final la calificación obtenida.
    </p>
    <h2>MINICUESTIONARIO</h2>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        <br>
        <input type="text" name="nombre">
        <p>Cuantas Asignaturas tiene el segundo curso de DAW</p><br>
        <input type="radio" name="numero" value="6" >6 <br>
        <input type="radio" name="numero" value="7"> 7<br>
        <br>
        <br>
        <p>¿Cual es el nombre del profesor de DWES?</p><br>
        <input type="radio" name="profesor" value="Ester" > Esther <br>
        <input type="radio" name="profesor" value="Yolanda"> Yolanda <br>
        <br>
        <br>
        <p>Quien es el secretario del instituto?</p><br>
        <input type="radio" name="secretario" value="Ester" > Esther <br>
        <input type="radio" name="secretario" value="Yolanda"> Yolanda <br>
        <br>
        <br><input type="submit" value="Calificar"> <br>
    </form>
    <p>
    <?php
    if(isset($_POST) && !empty($_POST)){
        echo "Recibido!! Mira la URL en tu navegador. Está 'limpia' <hr>";
        echo "Bienvenido $_POST[nombre] $_POST[profesor]";
        //var_dump nos puede ayudar a entender lo que hemos recibido
        echo "<hr><pre>";
        var_dump($_POST);
        echo "</pre>";
    }
     else {
         echo "Todavía no hemos recibido nada!";
    }
    ?>
        <?php
        var_dump($_POST);
        ?>
    </p>
</body>

</html>