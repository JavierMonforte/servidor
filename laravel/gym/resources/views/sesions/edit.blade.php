@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>Actualización de estudios</h1>

        <form action="/sesions/{{$sesion->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div>
            <label for="name">Actividad</label>
            <input type="text" name="name" value="{{$sesion->activity->name}}"> 
        </div>

        <div>
            <label for="inicio">Inicio</label>
            <input type="datetime-local" name="inicio" value="{{$sesion->inicio}}"> 
        </div>

        <div>
        <label for="fin">Inicio</label>
            <input type="datetime-local" name="fin" value="{{$sesion->fin}}">  
        </div>
       
        <div>
            <input type="submit" value="actualizar"> 
        </div>        
        </form>
        </div>
    </div>

</div>
@endsection