@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">


            <h1>RESERVA TU SESION
                <a href="/activities/create" class="btn btn-primary float-right">
                    Nuevo
                </a>
            </h1>
            <form action="" id="formulario">
                <select id='actividad' name="id" class="col-md-4">
                    @forelse ($activities as $activity)
                    <option value="{{$activity->id}}">{{$activity->name}}</option>
                    @empty
                    <option value="null">No hay estudios registrados</option>
                    @endforelse
                </select>

                <h2>Busqueda ajax</h2>
                <input type="text" id="filtro">
                <input type="submit">
            </form>
            <br>
            <div id="destinofiltro" class="col-md-8">
            </div>
            <script src="./jquery-3.6.0.min.js"></script>
            <script src="/js/llamadaajax.js"></script>




        </div>
    </div>
</div>
@endsection