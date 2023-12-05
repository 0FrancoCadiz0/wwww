@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="row">
                    @foreach ($libro as $l)
                        <div class="col-md-4 mb-4">
                            <div class="card col-12">
                                <div class="card-header ">                                
                                    @if ($l->imagen)
                                    <img src="{{ asset('storage/images/' . basename($l->imagen)) }}" alt="Foto de Usuario" class="card-img-top img-fluid" style="object-fit: cover; height: 300px;">
                                    @else
                                        <img src="{{ asset('images/libronoencontrado.jpg') }}" alt="Imagen por Defecto" class="card-img-top img-fluid" style="object-fit: cover; height: 300px;">
                                    @endif
                                </div>
                                <div class="card-body" style="height: 200px;">
                                    <h5 class="card-title">{{ $l->nombre }}</h5>
                                    <p class="card-text">
                                        <strong>Precio:</strong> {{$l->precio}}<br>
                                        <strong>Stock:</strong> {{$l->stock}}<br>
                                        <strong>ISBN:</strong> {{$l->ISBN}}
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-success" type="button" style="margin-left: 10px">Añadir</button>
                                    <a href="{{ route('control.verLibro', $l->cod_libro) }}" data-bs-toggle="tooltip">
                                        <button class="btn btn-info" type="button" style="margin-right: 10px">Ver</button>
                                    </a>
                                </div>
                                <br>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection