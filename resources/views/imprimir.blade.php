@extends('layouts.template_menu')

@section('titulo') Imprimir Informe @endsection

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
<div id="printableArea">
    <div class="container-fluid" style='background-color:;padding:20px;'>
        <input type="button" onclick="printDiv('printableArea')" value="Imprimir Informe" />

        @foreach($informes as $informe)
        <h3 id='{{ $informe->indicador }}-titulo'> {{ $informe->indicador }} {{ $informe->titulo }} </h3>
        <p> {{ $informe->observacion }} </p>
        <div class="row">
            <div class="col-md-6" style='background-color:white;'>
                <div id="contenedor-html" class="p-3 border rounded bg-light"
                    style="border:1px solid #ccc;background:#f8f9fa;padding:10px">
                    {!! $informe->respuesta !!}
                </div>
            </div>
            <div class="col-md-6" style='background-color:white;'>
                <h3>Probatorios</h3>
                    @forelse ($informe->probatorios as $probatorio)
                    <div style='background-color:green;width:50%;padding:10px;margin:5px;border-radius:15px;'>
                    <a href="/storage/{{ $probatorio->enlace }}" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"> {{ $probatorio->codigo }}-{{ $probatorio->nombre }}</a></div>
                    @empty
                    <li>No hay probatorios asociados.</li>
                    @endforelse
            </div> </div>
        </div>

        @endforeach
    </div>
</div>

<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
}
</script>
@endsection