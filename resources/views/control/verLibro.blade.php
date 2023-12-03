@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card libro-card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            @if ($libro->imagen)
                                <img src="{{ asset('storage/images/' . basename($libro->imagen)) }}" alt="Imagen del Libro" class="img-fluid libro-img" style="width: 400px; height: 600px;>
                            @else
                                <img src="{{ asset('images/libronoencontrado.jpg') }}" alt="Imagen por Defecto"  class="img-fluid libro-img" style="width: 400px; height: 600px;">
                            @endif
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 align="center" class="card-title">{{ $libro->nombre }}</h1>
                                <p class="card-text">
                                    <strong>Código del Libro:</strong> {{ $libro->cod_libro }}<br>
                                    <strong>Código de Clasificación:</strong> {{ $libro->cod_clasificacion }}<br>
                                    <strong>Precio:</strong> {{ $libro->precio }}<br>
                                    <strong>Sinopsis:</strong> {{ $libro->descripcion }}<br>
                                    <strong>ISBN:</strong> {{ $libro->ISBN }}<br>
                                    {{--<strong>Edición del Libro:</strong> {{ $libro->edicion_libro }}<br>--}}
                                    <strong>Stock:</strong> {{ $libro->stock }}<br>
                                    {{--<strong>Autor:</strong> {{ $libro->autor }}<br> 
                                    <strong>Idioma:</strong> {{ $libro->idioma }}<br>
                                    <strong>Género:</strong> {{ $libro->genero }}<br>
                                    <strong>Editorial:</strong> {{ $libro->editorial }}<br>--}}
                                </p>
                                <button class="btn btn-success">Comprar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
