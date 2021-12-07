<!--7. Crea una aplicación web con una clase App y varios métodos.
a) En todos los casos se trata de obtener una serie numérica.
b) El método debe calcular la serie y guardarla en un array, después hay que incluir una vista que
muestre la serie.
c) Puede ser que necesites crear métodos auxiliares (private) para el cálculo del array, por ejemplo:
esPrimo().
d) Los métodos necesarios son:
i. Index (index). Presentación de la App y enlaces.
ii. Fibonacci (fibonacci). Muestra la serie de Fibonacci. Debe mostrar todos los términos
menores a un millón.
iii. Potencias de 2 (potencias2). Debe mostrar los valores de las potencias de 2 hasta 2
elevado a 24.
iv. Factorial (factoriales). Debe mostrar los factoriales desde 1 hasta n de tal manera que el
último término sea el más próximo cercano al millón.
v. Nº. primos (primos). Debe encontrar los números primos entre 1 y 10.000.-->

<?php
include ('App.php');
$app = new App();
$app->run();