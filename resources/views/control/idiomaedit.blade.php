@extends('layouts.layout')
@section('content')
<br>
<div class="row justify-content-center">
    <div class="card col-lg-4">
        <div class="card-header"><h2>Editar Idiomas</h2></div>
        <div class="card-body">
            <form method="POST" action="{{route('idioma.update',$idioma->cod_idioma)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="nombreIE" class="form-label">Nombre idioma</label>
                    <input type="text" class="form-control" name="nombreIE" value="{{$idioma->nom_idioma}}">
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection