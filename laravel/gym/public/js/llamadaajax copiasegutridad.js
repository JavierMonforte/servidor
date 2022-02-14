console.log("enlazado");

$('#formulario').click(function(e) {
    e.preventDefault();
    console.log("ha hecho click");
    data = $('#actividad').val();
    mes = $('#mes').val();
    console.log(mes);
    console.log(data);

    /* $.get("/reservas/filter?id=" + data, function(data, status) {
         // console.log("Data: " + data + "\nStatus: " + status);
         console.log(data);

         crearTabla(data);

         //$('#destinofiltro').html(data);
     });*/
    $.ajax({
            method: "GET",
            url: "/reservas/filter",
            data: { id: data, mes: mes }
            //data: { id: data }
        })
        .done(function(data) {
            crearTabla2(data);
        }).fail(function() {
            $("#destinofiltro").html("");
            $("#destinofiltro").append("<p>Se ha producido un error</p>");
        })

})

function crearTabla2(data) {
    var elementos = $(data);

    if (data.length > 0) {
        $("#destinofiltro").html("");
        $("#destinofiltro").append("<table class='table table-striped table-hover'>");
        $("#destinofiltro").find("table").append("<tr>");
        $("#destinofiltro").find("tr").append("<th>Hora Inicio</th>");
        $("#destinofiltro").find("tr").append("<th>Hora Fin</th>");
        $("#destinofiltro").find("tr").append("<th>Reservar</th>");


        for (let index = 0; index < elementos.length; index++) {
            var i = index + 1;
            $("#destinofiltro").find("table").append("<tr>");

            var inicio = elementos[index].inicio;
            var fin = elementos[index].fin;
            var id = elementos[index].id;
            var enlace = "<button class = 'btn btn-primary btn-sm' value ='" + id + '"> Reservar </button>';

            $("#destinofiltro").find("tr").eq(i).append("<td>" + inicio + "</td>");
            $("#destinofiltro").find("tr").eq(i).append("<td>" + fin + "</td>");
            $("#destinofiltro").find("tr").eq(i).append("<td>" + enlace + "</td>");
            $("button").on("click", mandarPost());

        }


    } else {
        $("#destinofiltro").html("<p>No hay sesiones en esas fechas</p>");


    }
}

function mandarPost() {
    alert($(this).val());
}