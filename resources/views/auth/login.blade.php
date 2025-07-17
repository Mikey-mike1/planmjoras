<style>
body {
    background-image: url("https://blogs.unah.edu.hn/assets/fcm/blog/8669/397436188-858996339355151-4213691524490752082-n.jpg");
    /* Reemplaza con la ruta correcta */
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

#card {
    margin-top: 50px;
    padding: 25px;
    background-color: #03356f;
    opacity: 0.9;
    color: white;
}
</style>
@extends('layouts.template')
@section('titulo') Login @endsection
@section('contenido')
<div class='container' id='card'>
    <h2>Plan de Mejoras Carrera de Medicina 2025</h2>

    @if ($errors->any())
    <div>
        <strong>¡Ups!</strong> {{ $errors->first() }}
    </div>
    @endif




    <form method="POST" action="{{ url('/login') }}">
        @csrf
        <label>Email:</label><br>
        <input class="form-control" type="email" name="email" required><br><br>

        <label>Contraseña:</label><br>
        <input class="form-control" type="password" name="password" required><br><br>

        <button class="btn btn-success mb-3" type="submit">Ingresar</button>
    </form>
</div>



@endsection