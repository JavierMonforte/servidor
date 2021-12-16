<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="stylesheet" href="./css/formulario.css">

</head>

<body class="">
    <?php include("./views/header.php");?>
    <h2>Servicios</h2>
    <table>
            <?php
            session_start();
            if(isset($_SESSION) && !empty($_SESSION)){
            foreach ($_SESSION['servicios'] as $id => $value) {

                echo("<tr>");
                echo("<td>".$id."</td>");
                foreach ($value as $key => $elemento) {
                      echo("<td>".$key.":".$elemento."</td>");          
                }
                echo("<td><a href='?method=borrarServicios&id=$id'>Borrar</a></td>");
                echo("</tr>");
            }
        }
           ?>
    </table>
    <h4 class="titulo">Añadir servicios</h4>
    <form action="?method=almacenarServicios" method="post" id="formulario">
        <input type="text" id="servicio" name="servicios" class="formul" placeholder="SERVICIO"/>
        <input type="text" id="color" name="color" class="formul" placeholder="COLOR" />
        <input type="number" id="precio" name="precio" class="formul" placeholder="PRECIO" />
        <textarea name="descripcion" class="" placeholder="DESCRIPCION"></textarea>
        <p id="boton"><input type="submit" id="submit"  name="submit" value="ENVIAR MENSAJE"/></p>
    </form>

</body>

</html>