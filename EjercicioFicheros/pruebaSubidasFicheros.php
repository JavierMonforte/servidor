<?php

// $_FILES contiene información sobre el fichero que se está subiendo
// Es un array bidimensional :
//     primer índice: identifica el fichero según el atributo name en el formulario  
//     claves para el segundo índice: 
//          name: nombre del fichero en el cliente
//          size: tamaño en bytes
//          type: tipo MIME del fichero
//          tmp_name: nombre temporal con el que se ha subido al servidor
//          error: código de error asociado a la subida
// El fichero se almacena en el directorio temporal del servidor
//  -> para moverlo a otro directorio: bool move_uploaded_file ($fichero, $destino)

// hay que crear el directorio

echo "<pre>";
print_r($_FILES);
echo "</pre>";

foreach ($_FILES as $key => $value) {
    echo $key. "<br><br>";
    foreach ($value as $key2 => $element) {
    echo $key2. "=>" .$element."<br>";
    }
    # code...
}
$res = move_uploaded_file(
    $_FILES["fichero1"]["tmp_name"],
    "subidos/" . $_FILES["fichero1"]["name"]

);
if ($res) {
    echo "<br>Fichero guardado";
} else {
    echo "<br>Error";
}
$res = move_uploaded_file(
    $_FILES["fichero2"]["tmp_name"],
    "subidos/" . $_FILES["fichero2"]["name"]
);

if ($res) {
    echo "<br>Fichero guardado";
} else {
    echo "<br>Error";
}
