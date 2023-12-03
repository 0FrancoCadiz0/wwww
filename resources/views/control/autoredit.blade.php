@extends('layouts.layout')

@section('content')

<br>
<div class="row justify-content-center">
    <div class="card col-lg-4">
        <div class="card-header"><h2>Editar Autores</h2></div>
        <div class="card-body">
            <form method="POST" action="{{route('autor.update',$autor->cod_autor)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="nombreAE" class="form-label">Nombre Autor</label>
                    <input type="text" class="form-control" name="nombreAE" value="{{$autor->nom_autor}}">
                </div>
                <div class="mb-3">
                    <label for="apellidoAE" class="form-label">Apellido Autor</label>
                    <input type="text" class="form-control" name="apellidoAE" value="{{$autor->apellido_autor}}">
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection