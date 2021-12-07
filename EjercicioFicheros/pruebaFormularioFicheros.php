<!--
Subida de ficheros:
  usar el atributo enctype="multipart/form-data" y el método POST
  para el fichero se usa la etiqueta <input type = "file">
--> 

<form action="pruebaSubidasFicheros.php" method="post" enctype="multipart/form-data">
    Escoja un fichero
    <input type="file" name="fichero1">
    <input type="file" name="fichero2">
    <!--<input type="file" name="fichero[]" multiple> ESTA ES UNA OPCION PARA SUBIR VARIOS FICHEROS-->
    <input type="submit" value="subir fichero">
</form>