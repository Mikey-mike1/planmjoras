@extends('layouts.template_menu')

@section('titulo') Probatorios @endsection

<style>


</style>
@section('contenido')
<div class="container-fluid" style='background-color:;padding:20px;'>

    <div class="form-group">
        <h3>Crear Nuevo Probatoio</h3>
        <form action="{{ route('probatorios') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label>Código:</label>
            <input type="text" name="codigo" class="form-control" required>

            <label>Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>

            <label>Archivo PDF:</label>
            <input type="file" class="form-control" name="pdf" accept="application/pdf" required>
            <br>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Enlace</th>
                <th scope="col">Agregar Probatorio a indicador</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach($probat as $probat)
            <tr>

                <th scope="row">{{ $probat->id }}</th>
                <td>{{ $probat->codigo }}</td>
                <td>{{ $probat->nombre }}</td>
                <td> <a href="/storage/{{ $probat->enlace }}"
                        class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Ver
                        Probatorio</a> </td>
                <td>
                    <form action="{{ route('insertar_probatorios') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input id="probatorio" type="hidden" name="probatorio" value="{{ $probat->id }}">
                        <div class="row">
                            <div class="col-md-6" style='background-color:white;'><select class="form-select"
                                    aria-label="Default select example" name='id_indica'>
                                    <option selected>Seleccionar Indicador</option>

                                    @foreach($indica as $item)
                                    <option value="{{ $item->id }}">{{ $item->indicador }}</option>
                                    @endforeach
                                </select></div>
                            <div class="col-md-6" style='background-color:white;'><button type="submit"
                                    class="btn btn-success">Insertar Probatorio</button></div>
                        </div>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>



</div>
@endsection