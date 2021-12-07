<?php
    require('Persona.php');
    require('Cliente.php');
    $p1 = new Persona ('Juan', 'García', 18);
    echo "hola";
    echo $p1->saludar();
    echo "<br>";
    echo "Soy $p1";
    echo "<br>";
    echo "Mi nombre completo es ".$p1->getNombre();
    $cliente = new Cliente('Javier', 'Monforte',44,10);
    echo "<br>";
    echo $cliente->getNombre(). " ";
    echo "<br>";
    echo $cliente->getApelllido()." ";
    $cliente->setApellido('Perez');
    $cliente->setNombre('Alberto');
    echo "<br>";
    echo "Soy el $cliente";