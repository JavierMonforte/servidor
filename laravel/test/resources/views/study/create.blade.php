@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>Creación de estudios</h1>

        <form action="/studies" method="post">
        @csrf
        <div>
            <label for="code">Código</label>
            <input type="text" name="code"> 
        </div>
        @error('code')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name"> 
        </div>
        @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <div>
            <label for="abreviation">Abreviatura</label>
            <input type="text" name="abreviation"> 
        </div>
        @error('abreviation')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        <div>
            <input type="submit" value="crear"> 
        </div>        
        </form>
        @if(count($errors->all()))
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach            
        </div>
        @endif
        </div>
    </div>

</div>
@endsection