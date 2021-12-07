<?php
define('NOMBRE','Javier');
//$NOMBRE = 'Javier';

if (isset($_POST) && !empty($_POST) && $_POST['nombre'] == NOMBRE) {
    echo '<p><pre>';
    echo 'Bienvenido '.$_POST['nombre'];
    echo '</pre><p>';
} else {
    include_once ("ejercicio2.php") ;
    echo "El nombre introducido es obligatorio";
}
