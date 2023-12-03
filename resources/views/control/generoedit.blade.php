@extends('layouts.layout')
@section('content')
<br>
<div class="row justify-content-center">
    <div class="card col-lg-4">
        <div class="card-header"><h2>Editar Generos</h2></div>
        <div class="card-body">
            <form method="POST" action="{{route('genero.update',$genero->cod_genero)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="nombreGE" class="form-label">Nombre Genero</label>
                    <input type="text" class="form-control" name="nombreGE" value="{{$genero->nom_genero}}">
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection