<?php
echo "10. Repite el ejercicio 8 creando un array asociativo. Cada posición se llamará: base, escolta, alero,
alapivot, pivot. Muestra el resultado con un foreach (clave => valor). <hr><br>";

$equipo = array ( 'Base'=>'Antonio Corbalan','Escolta'=>'Epi','Alero'=>'Iturriaga', 'Alapivot' =>'Fernando Martin','Pivot'=> 'Fernando Romai');

echo "<pre>";
print_r($equipo);
echo "</pre>";

foreach ( $equipo as $posicion => $jugador){
    echo $posicion , " - ", $jugador, "<br>";
}

/*Probando A imprimir por id*/
echo "<br>";
echo $equipo['Base'];
echo "<br>";
