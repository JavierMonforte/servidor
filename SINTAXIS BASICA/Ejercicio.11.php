<?php
echo "11. Construye un array con el nombre de 4 países. Por cada país debes almacenar su moneda y número
de habitantes. Muéstralo por pantalla. <hr><br>";

$paises = ['España' => ['moneda' =>'Peseta', 'poblacion'=>'46 Mill'], 
'Francia' => ['moneda' =>'Franco', 'poblacion'=>'67 Mill'], 
'Italia' => ['moneda' =>'Lira', 'poblacion'=>'60 Mill']];


function imprimirArray($paises)
{
    $texto = "";
    foreach ($paises as $nombre => $datos) {
        $texto .= "<br>" . $nombre . "<br>";
        $texto .= "--------------<br>";
        foreach ($datos as $dato) {
            $texto .= $dato . "<br>";
        }
    }
    return $texto;
}

echo imprimirArray($paises);

function imprimirArray2($paises)
{
    $texto = "";
    foreach ($paises as $datos) {

        foreach ($datos as $dato) {
            $texto .= $dato . "<br>";
        }
    }
    return $texto;
}

echo imprimirArray2($paises);

echo "<pre>";
echo print_r($paises);
echo "</pre>";
echo "<br>";
echo "<pre>";
echo var_dump($paises);
echo "</pre>";
