@extends('layouts.template_menu')

@section('titulo') Cuenta @endsection

<style>
 .inter{
    padding: 20px;
    margin: 20px;
    border-radius: 10px;
    color: white;

 }

  .inter:hover{
    background-color: #03356f !important;

 }

 a {
    text-decoration: none !important; 
 }


</style>
@section('contenido') 
<div class="container-fluid" style='background-color:;padding:20px;'>

<h1>Usuario: {{ $usuario->name }} </h1>
<h1>Correo: {{ $usuario->email }}</h1>
<h2>Fecha de Creación: {{ $usuario->created_at }}</h2>
</div>
@endsection