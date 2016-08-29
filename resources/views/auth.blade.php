@extends('layouts.default');

@section('content')
<h1>Iniciar sesión</h1>


<form action="{{route('auth_store_path')}}" method="POST">
    
    {{ csrf_field()}}
    <label for="email">Email:</label>
    <input class="form-control" type="text" name="email" value="">
    <label for="password">Contraseña:</label>
    <input class="form-control" type="password" name="password">
    <br>
    <input class="btn btn-primary" type="submit" value="Iniciar">
</form>

@if($errors->has())
    <div class="alert alert-danger">
        <ul class="list-unstyled">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>    
@endIf

@stop