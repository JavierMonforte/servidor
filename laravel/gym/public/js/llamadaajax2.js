console.log("enlazado");

$('#formulario').click(function(e) {
    e.preventDefault();
    console.log("ha hecho click");
    data = $('#actividad').val();
    console.log(data);

    $.get("/reservas/filter?id=" + data, function(data, status) {
        // console.log("Data: " + data + "\nStatus: " + status);
        console.log(data);

        crearTabla(data);

        //$('#destinofiltro').html(data);
    });

})

function crearTabla(data) {

    var destino = document.getElementById("destinofiltro");
    destino.innerHTML = "";
    var tabla = document.createElement("table");
    var fila = document.createElement("tr");
    var cabecera = document.createElement("th");
    var contenido = document.createTextNode("Hora Inicio");
    cabecera.appendChild(contenido);
    fila.appendChild(cabecera);
    var cabecera = document.createElement("th");
    var contenido = document.createTextNode("Hora Fin");
    cabecera.appendChild(contenido);
    fila.appendChild(cabecera);

    tabla.appendChild(fila);
    var a = document.createAttribute("class");
    a.value = "table table-striped table-hover";
    tabla.setAttributeNode(a);
    var celda;
    var contenido;
    for (let index = 0; index < data.length; index++) {
        var fila = document.createElement("tr");

        var celda = document.createElement("td");
        var contenido = document.createTextNode(data[index].inicio);
        celda.appendChild(contenido);
        fila.appendChild(celda);
        var celda = document.createElement("td");
        var contenido = document.createTextNode(data[index].fin);
        celda.appendChild(contenido);
        fila.appendChild(celda);
        var celda = document.createElement("td");
        var contenido = document.createTextNode("");
        celda.appendChild(contenido);
        fila.appendChild(celda);
        tabla.appendChild(fila);
    }
    var destino = document.getElementById("destinofiltro");
    destino.appendChild(tabla);


}