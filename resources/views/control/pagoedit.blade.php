@extends('layouts.layout')
@section('content')
<br>
<div class="row justify-content-center">
    <div class="card col-lg-4">
        <div class="card-header"><h2>Editar Pagos</h2></div>
        <div class="card-body">
            <form method="POST" action="{{route('pago.update',$pago->cod_pago)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="nombrePE" class="form-label">Nombre pago</label>
                    <input type="text" class="form-control" name="nombrePE" value="{{$pago->metodo_pago}}">
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection