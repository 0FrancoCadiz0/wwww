@extends('layouts.layout')
@section('content')
<br>
<div class="row justify-content-center">
    <div class="card col-lg-4">
        <div class="card-header"><h2>Editar Editoriales</h2></div>
        <div class="card-body">
            <form method="POST" action="{{route('editorial.update',$editorial->cod_editorial)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="nombreEE" class="form-label">Nombre Autor</label>
                    <input type="text" class="form-control" name="nombreEE" value="{{$editorial->nom_editorial}}">
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection