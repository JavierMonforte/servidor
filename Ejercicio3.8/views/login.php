<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Formularios</title>
</head><body>
    <h2>Formulario de login</h2>
    <form method="GET" action="/servidor/Ejercicio3.8/index.php">
        <label>Usuario</label><input type="text" value="" name="usuario"><br>
        <label>Clave</label><input type="password" value="" name="clave"><br>
        <input type="hidden" value="login" name="method">
        <input type="submit" value="enviar">
    </form>
</body></html>