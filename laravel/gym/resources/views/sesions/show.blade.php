<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Actividad nº {{$sesion->id}}</h1>


    <ul>
        <li>
            <strong>Inicio</strong>
            {{ $sesion->inicio }}
        </li>
        <li>
            <strong>Fin</strong>
            {{ $sesion->fin}}
        </li>
        <li>
            <strong>Actividad</strong>
            {{ $sesion->activity->name }}
        </li>
    </ul>
</body>
</html>