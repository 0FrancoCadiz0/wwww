@extends('layouts.layout')
@section('content')
<br>
<div class="row justify-content-center">
    <div class="card col-lg-4">
        <div class="card-header"><h2>Editar Clasificaciones</h2></div>
        <div class="card-body">
            <form method="POST" action="{{route('clas.update',$clasificacion->cod_clasificacion)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="nombreCE" class="form-label">Nombre clasificacion</label>
                    <input type="text" class="form-control" name="nombreCE" value="{{$clasificacion->nom_clasificacion}}">
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection