    @extends('layouts.template_menu')

    @section('titulo') Informe @endsection

    <style>
.indicador {

    padding: 20px;
}

a {
    text-decoration: none !important;
}
    </style>
    @section('contenido')


    <div class="container-fluid" style='background-color:;padding:20px;'>

        @foreach($informes as $informe)
        @if ($informe->respuesta == '')
        <a href="#{{ $informe->indicador }}-titulo" class="link-danger"> | {{ $informe->indicador }} </a>
        @elseif ($informe->respuesta !='' )
        <a href="#{{ $informe->indicador }}-titulo" class="link-success"> | {{ $informe->indicador }} </a>
        @endif


        @endforeach

        @foreach($informes as $informe)


        <div class="container-fluid indicador">

            <h3 id='{{ $informe->indicador }}-titulo'> {{ $informe->indicador }} {{ $informe->titulo }} </h3>
            <p> {{ $informe->observacion }} </p>

            <div class="row">
                <div class="col-md-6" style='background-color:white;'>
                    <h4>Respuesta</h4>





                    <div class="accordion" id="accordionPanelsStayOpenExample1">

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-{{$informe->id}}" aria-expanded="false"
                                    aria-controls="panelsStayOpen-{{$informe->id}}">
                                    Mostrar Respuesta
                                </button>
                            </h2>
                            <div id="panelsStayOpen-{{$informe->id}}" class="accordion-collapse collapse">
                                <div class="accordion-body">

                                    <div id="contenedor-html" class="p-3 border rounded bg-light"
                                        style="border:1px solid #ccc;background:#f8f9fa;padding:10px">
                                        {!! $informe->respuesta !!}
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>



                    <div class="accordion" id="accordionPanelsStayOpenExample">

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-{{$informe->indicador}}" aria-expanded="false"
                                    aria-controls="panelsStayOpen-{{$informe->indicador}}">
                                    Editar Respuesta
                                </button>
                            </h2>
                            <div id="panelsStayOpen-{{$informe->indicador}}" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <form action="{{ route('informe-guardar') }}" method="POST">
                                        @csrf
                                        <input id="{{ $informe->id }}" type="hidden" name="{{ $informe->id }}"
                                            value="{{ $informe->respuesta }}">
                                        <trix-editor input="{{ $informe->id }}"></trix-editor>
                                        <input type="hidden" name="identificador" id="identificador"
                                            value='{{ $informe->id }}'>
                                        <button type="submit" class="btn btn-primary mt-3">Guardar Respuesta</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="col-md-6">
                    <h4>Probatorios</h4>
                    
                    @forelse ($informe->probatorios as $probatorio)
                    <div style='background-color:green;width:50%;padding:10px;margin:5px;border-radius:15px;'>
                    <a href="/storage/{{ $probatorio->enlace }}" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"> {{ $probatorio->codigo }}-{{ $probatorio->nombre }}</a></div>
                    @empty
                    <li>No hay probatorios asociados.</li>
                    @endforelse
                    

                </div>
            </div>
        </div>
        @endforeach
    </div>



    @endsection