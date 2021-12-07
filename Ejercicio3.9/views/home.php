<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Deseos</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Deseo</th>
        </tr>
        <?php
        $_array = unserialize($_COOKIE['deseos']);
        $numero = 0;
        echo("<ul>");
        foreach ($_array as $key => $value) {
            echo ("<li> id=" . $key . " - " . $value . "<a href='?method=borrar&id=". $key ."'>Borrar</a></li>");
        };
        ?>
    </table>
    <h2>Alta de nuevos deseos</h2>
    <form action="?method=new" method="POST">
        <label for="new">Nuevo Deseo</label>
        <input type="text" name="new">
        <input type="submit" value="nuevo">
        
    </form>
    <button><a href='?method=empty'>Borrar Lista</a></button>
    <button><a href="?method=close">Log out</a></button> 
    <br>
    
</body>

</html>