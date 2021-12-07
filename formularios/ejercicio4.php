<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Formularios</title>
</head>

<body>
    <p>
        4. Envío del script al mismo script. Crea un formulario que funcione como una calculadora. Debe contener
        dos input como operandos y un select para elegir operador.
        <br>a) Si se reciben los datos muestra el resultado.
        <br>b) Si no son válidos o no existen debe mostrar de nuevo el formulario de la calculadora.
    </p>
    <h2>Calculadora</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        <label>Numero 1 </label><input type="text" value="" name="primerOperando"><br>
        <label>Numero 2 </label><input type="text" value="" name="segundoOperando"><br>
        <br>
        <select id="operacion" name="transporte">
            <option></option>
            <option>Suma</option>
            <option>Resta</option>
            <option>Multiplicacion</option>
            <option>Division</option>
        </select>
        <br>
        <br><input type="submit" value="Calcular"> <br>
    </form>
    <p>
        <?php
        $resultado = 0;
        if (isset($_POST) && !empty($_POST)) {
            $var = $_POST['transporte'];

            if (is_numeric($_POST['primerOperando']) + is_numeric($_POST['segundoOperando'])) {
                switch ($var) {
                    case 'Suma':
                        $resultado = $_POST['primerOperando'] + $_POST['segundoOperando'];
                        break;
                    case 'Resta':
                        $resultado = $_POST['primerOperando'] - $_POST['segundoOperando'];
                        break;
                    case 'Multiplicacion':
                        $resultado = $_POST['primerOperando'] * $_POST['segundoOperando'];
                        break;
                    case 'Division':
                        if ($_POST['segundoOperando'] != 0) {
                            $resultado = $_POST['primerOperando'] / $_POST['segundoOperando'];
                        } else {
                            echo "<p> En una division no se puede dividir por cero</p>";
                        }
                        break;
                    default:
                        echo "No has seleccionado operacion";
                }
            } else {
                echo "<p> No son valores numericos</p>";
            }
        } else {
            echo "<br>Realice Operaciones";
        }
        echo "<br>Resultado: " . $resultado;
        ?>
    </p>
</body>

</html>