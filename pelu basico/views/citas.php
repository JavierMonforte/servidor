<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="stylesheet" href="./css/formulario.css">

</head>

<body class="">
    <?php include("./views/header.php");?>

    <h2 class="titulo">CONTACTO</h2>
    <form action="" method="post" id="formulario">
        <input type="text" id="nombre" class="formul" placeholder="NOMBRE Y APELLIDOS" />
        <input type="tel" id="telefono" class="formul" placeholder="TELÉFONO" />
        <input type="email" id="email" class="formul" placeholder="EMAIL" />
        <select class="select" class="empleado">
            <optgroup>
        <option value="">Seleccione Empleado</option>
		<option value="Juan">Juan</option>
		<option value="Maria">Maria</option>
            </optgroup>
		</select>
        <select class="select" class="servicio">
            <optgroup>
        <option value="">Seleccione un corte</option>
		<option value="corto">CORTE Y PEINADO CORTO</option>
		<option value="medio">CORTE Y PEINADO MEDIO</option>
		<option value="medio">CORTE Y PEINADO LARGO</option>

            </optgroup>
		</select>
        <p>MENSAJE</p>
        <textarea name="mensaje" class="" placeholder="INDÍCANOS EL SERVICIO QUE DESEAS, FECHA Y HORA APROXIMADA"></textarea>
        <p id="boton"><input type="submit" id="submit"  name="submit" value="ENVIAR MENSAJE" /></p>
    </form>
    <p style="text-align: center;">NOS PONDREMOS EN CONTACTO CONTIGO <br />PARA CONFIRMAR TU RESERVA</p>

</body>

</html>