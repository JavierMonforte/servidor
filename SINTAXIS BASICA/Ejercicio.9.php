<?php
echo "9. Repite el ejercicio anterior añadiendo los elementos del array uno a uno. Muestra el resultado por
pantalla.<hr><br>";

$equipo [] = 'Fernando Romai';
$equipo [1] = 'Antonio Corbalan';
$equipo [] = 'Iturriaga';
$equipo [] = 'Fernando Martin';
$equipo [] = 'Marc Gasol';

echo "<pre>"; 
print_r($equipo);
echo "</pre>";
echo "<br> Equipo de basket<br>";
foreach( $equipo as $jugador){
    echo $jugador,"<br>";
}
