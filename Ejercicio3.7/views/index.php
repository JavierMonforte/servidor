<!--

-->
<!DOCTYPE html>
<HTML>

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3.7
    </title>
    <link rel="stylesheet" href="css/estilos.css">
    <script></script>
</head>

<body>
    <div id="general">
    <?php
    //Incluir los enlaces
    require_once('views/header.php');
    ?>
    <div id="cuerpo">
    <h2> <?php echo ($this->name);?> </h2><!-- Porque no funciona con php-->

    <p><?php
        echo ("<table border='solid'>");
        foreach ($this->arrayNumeros as $key => $value) {
            echo ("<tr>" ."<td>" . $key . "</td> ". "<td>" . $value . "</td></tr>");
        }
        echo ("<table>");
        ?></p>
    <script></script>
    </div>
    </div>
</body>

</HTML>