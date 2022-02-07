<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Lista de Socios</h1>


<table border="1">
<tr>
    <th>DNI</th>
    <th>Nombre</th>
    <th>Peso</th>
    <th>Altura</th>
    <th>Fecha Nacimiento</th>
    <th>Sexo</th>

</tr>
@forelse ($users as $member)
<tr>
    <td>{{$member->dni}} </td>
    <td>{{$member->nombre}} </td>
    <td>{{$member->peso}} </td>
    <td>{{$member->altura}} </td>
    <td>{{$member->fechaNacimiento}} </td>
    <td>{{$member->sexo}} </td>

    <td> <a href="/users/{{$member->id}}">Ver</a></td>
</tr>
@empty
<tr>
    <td colspan="3">No hay estudios registrados</td>
</tr>
@endforelse
</table>

</body>
</html>