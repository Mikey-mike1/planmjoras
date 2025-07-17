@extends('layouts.template_menu')

@section('titulo') Dashboard @endsection

<style>
.inter {
    padding: 20px;
    margin: 20px;
    border-radius: 10px;
    color: white;

}

.inter:hover {
    background-color: #03356f !important;

}

a {
    text-decoration: none !important;
}
</style>
@section('contenido')
<div class="container-fluid" style='background-color:;padding:20px;'>
    <a href="{{route('informe')}}">
        <div class="container-fluid inter" style='background-color:#198044;'>
            <h1>Informe Plan de Mejoras 2025</h1>
        </div>
    </a>
    <a href="{{route('probatorios')}}">
        <div class="container-fluid inter" style='background-color:#198044;'>
            <h1>Probatorios</h1>
        </div>
    </a>
    <a href="{{route('logout')}}">
        <div class="container-fluid inter" style='background-color:red;'>
            <h1>Cerrar Sesión</h1>
        </div>
    </a>
</div>
@endsection