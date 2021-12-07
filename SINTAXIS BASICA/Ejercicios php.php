<?php
echo "EJERCICIO 1","<br>",
"1. Escribe un programa que utilice las variables $x y $y. Asígnales los valores 144 y 999
respectivamente. A continuación, muestra por pantalla el valor de cada variable, la suma, la resta, la
división y la multiplicación.
" ,"<br>","<br>";


$x = 144;
$y = 999;

echo " valor de x =  $x <br>";
echo " valor de y = $y <br>";
echo " suma de x y =" , $x+$y ,"<br>";
echo " suma de x y =" . $x+$y ."<br>";
echo " resta de x y =" , $x-$y ,"<br>";
echo " division de x y =" , $x/$y ,"<br>";
echo " Multiplicacion de x y =" , $x*$y ,"<br>","<hr>";

echo "2. Crea las variables $nombre, $direccion y $mail y asígnales los valores adecuados. Muestra los
valores en una tabla HTML","<br>","<br>";

$nombre = "Javier";
$direccion = "Alfonso V de Aragon";
$email = "jmonforte@fontecabras.es";

echo "<table border>";
echo " <tr><td>su nombre es $nombre","</td></tr>";
echo " <tr><td>Su direccion es $direccion","</td></tr>";
echo " <tr><td>su correo es $email" , "</td>","</tr>";
echo "</table>";
echo "<br><br><hr>";
echo "3. Realiza un conversor de euros a pesetas. La cantidad en euros que se quiere convertir deberá estar
almacenada en una variable.","<br>";


$euro = 100;
const CAMBIO = 166.386;

echo "El cambio de 100 € es ",  $euro*CAMBIO , "<br>","<br>","<hr>";
echo "<br>";
echo "<hr>";
echo "4. Imprimir la tabla de multiplicar del 8. Usar una constante para que fácilmente podamos adaptarla a
otros números","<br>","<br>","<hr>";

const NUMERO = 8; 
echo "<table border>";
for($i = 1; $i <= 10; $i++){

    echo "<tr> <td>",$i ,"*", NUMERO, "</td>", "<td>",$i*NUMERO,"</td><tr>";
}
echo "</table>";
echo "<br>";
echo "<hr>";

echo "5.- Imprimir los números divisibles por 3 desde el 1 hasta el 10.","<br><hr>";

$j = 0;
while ($j <=10){
    if($j % 3 == 0){
        echo "$j es divisible para 3";
        echo "<br>";
    }
    $j++;
}