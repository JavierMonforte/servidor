@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


        <h1>Lista de Usuarios
            <a href="/users/create" class="btn btn-primary float-right">
                Nuevo
            </a>
        </h1>


        <table class="table table-striped">
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        @forelse ($users as $user)
        <tr>
            <td>{{$user->name}} </td>
            <td>{{$user->email}} </td>
            <td>{{$user->password}} </td>
            <td> <a class="btn btn-primary btn-sm" href="/users/{{$user->id}}">Ver</a></td>
            <td> <a class="btn btn-primary btn-sm" href="/users/{{$user->id}}/edit">Editar</a></td>
        </tr>
        @empty
        <tr>
            <td colspan="3">No hay estudios registrados</td>
        </tr>
        @endforelse
        </table>



        <h4>El usuario Registrado es {{$user->name}}</h4>

        </div>
    </div>
</div>
@endsection




