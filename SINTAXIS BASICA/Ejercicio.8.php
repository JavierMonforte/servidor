<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        
    </body>
</html>



<?php
echo "8. Construir un array con el quinteto inicial de un equipo de basket. Imprímelo usando etiquetas html
de dos formas diferentes:
a) Indicando solo los nombres.
b) Indicando la posición del nombre en el array (0, 1, 2, ...).";
echo "<hr><br>";

$equipo = ['Scottie Pippen','Michael Jordan','Tony kukoc', 'Denis Rodman', 'Fernando Romai'];

foreach ($equipo as $jugador){
    echo "<br>",$jugador;
}

echo "<pre>", print_r($equipo), "</pre>";