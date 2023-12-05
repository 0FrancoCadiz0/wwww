@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card libro-card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            @if ($libro->imagen)
                                <img src="{{ asset('storage/images/' . basename($libro->imagen)) }}" alt="Imagen del Libro" class="img-fluid libro-img" style="width: 400px; height: 600px;">
                            @else
                                <img src="{{ asset('images/libronoencontrado.jpg') }}" alt="Imagen por Defecto"  class="img-fluid libro-img" style="width: 400px; height: 600px;">
                            @endif
                            <p class="card-text libro-text" style="margin-left: 15px;">
                                <br><strong>ISBN:</strong> {{ $libro->ISBN }}<br>
                                <strong>Edicion:</strong> {{$libro->edicion}}<br>
                                <strong>Género:</strong>
                                @foreach ( $gl as $gl)
                                    @if($gl->cod_libro == $libro->cod_libro)
                                        @foreach ($genero as $g)
                                            @if($g->cod_genero == $gl->cod_genero)
                                                {{ $g->nom_genero }}
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                                <br>
                                <strong>Idioma:</strong>
                                @foreach ( $il as $il)
                                    @if($il->cod_libro == $libro->cod_libro)
                                        @foreach ($idioma as $i)
                                            @if($i->cod_idioma == $il->cod_idioma)
                                                {{ $i->nom_idioma }}
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                                <br>
                                <strong>Clasificacion Edad:</strong>
                                @foreach ( $clasificacion as $ec)
                                    @if($ec->cod_clasificacion == $libro->cod_clasificacion)
                                        {{ $ec->nom_clasificacion}}
                                    @endif
                                @endforeach
                                <br>
                            </p>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 align="center" class="card-title libro-title">{{ $libro->nombre }}</h1>
                                <p class="card-text libro-text">
                                    <br><strong>Sinopsis:</strong> <br>{{ $libro->descripcion }}<br>
                                    <br><strong>Código del Libro:</strong> {{ $libro->cod_libro }}<br>
                                    <strong>Precio:</strong> {{ $libro->precio }}<br>
                                    <strong>Autor/es:</strong>
                                    @foreach ( $al as $al)
                                        @if($al->cod_libro == $libro->cod_libro)
                                            @foreach ($autor as $a)
                                                @if($a->cod_autor == $al->cod_autor)
                                                    {{ $a->nom_autor }} {{ $a->apellido_autor }},
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                    <br>
                                    <strong>Editorial:</strong>
                                    @foreach ( $el as $el)
                                        @if($el->cod_libro == $libro->cod_libro)
                                            @foreach ($editorial as $e)
                                                @if($e->cod_editorial == $el->cod_editorial)
                                                    {{ $e->nom_editorial }}
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                    <br>
                                    <strong>Stock:</strong> {{ $libro->stock }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success ms-auto" style="width: 150px; margin-right: 15px;">Comprar</button>
                    <br>
                </div>
                <br><br>
            </div>
        </div>
    </div>
@endsection
