<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Formularios</title>
</head><body>
    <h2>Formulario de login</h2>
    <form method="POST" action="?method=auth">
        <label>Usuario</label><input type="text" value="" name="usuario"><br>
        <label>Clave</label><input type="password" value="" name="clave"><br>
        <input type="submit" value="enviar">
    </form>
</body></html>