<?php 
echo "6. Imprimir los 10 primeros números de la sucesión Fibonacci. La sucesión comienza con los números
0 y 1; a partir de estos cada término es la suma de los dos anteriores.";

echo "<br><hr>";

$fibonachi = [0=>0, 1=>1];

for($i = 2; $i <= 10; $i++) {
$fibonachi[$i] = $fibonachi[($i-2)]+ $fibonachi[($i-1)];
}

print_r($fibonachi);

echo "<pre>", print_r(($fibonachi)),"</pre>";

 foreach($fibonachi as $numero){
    echo $numero, "<br>";
 }

 var_dump($fibonachi);


