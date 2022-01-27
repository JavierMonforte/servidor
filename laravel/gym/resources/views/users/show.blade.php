<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Socio nº {{$member->id}}</h1>


    <ul>
        <li>
            <strong>Código</strong>
            {{ $member->dni }}
        </li>
        <li>
            <strong>Nombre</strong>
            {{ $member->nombre }}
        </li>
        <li>
            <strong>Altura</strong>
            {{ $member->altura }}
        </li>
        <li>
            <strong>Peso</strong>
            {{ $member->peso }}
        </li>
        <li>
            <strong>Fecha Nacimiento</strong>
            {{ $member->fechaNNacimiento }}
        </li>
        <li>
            <strong>Sexo</strong>
            {{ $member->sexo }}
        </li>
    </ul>
</body>
</html>