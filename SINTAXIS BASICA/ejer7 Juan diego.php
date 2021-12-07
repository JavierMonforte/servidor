<!DOCTYPE html>

<head>
    <title>ejer 7</title>
</head>

<body>

    <?php
    $valor1 = 10;
    $divisores = 0;

    for ($i = 1; $i <= $valor1; $i = $i + 1) {

        if ($valor1 % $i == 0) {
            $divisores = $divisores + 1;
            $numeros[] = $i;
        }
    }

    if ($divisores > 2) {
        foreach ($numeros as $numero) {
            echo $numero . '<br>';
        }
    } else {
        echo 'es primo';
    }
    ?>

</body>

<html>