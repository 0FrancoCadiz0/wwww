@extends('layouts.layout')
@section('content')
<br>
<div class="row justify-content-center">
    <div class="card col-lg-10">
        <div class="card-header"><h2>Editar Editoriales</h2></div>
            <div class="card-body">
                <h2>Informacion Libros</h2>
                @if ($libro->imagen)
                    <img src="{{ asset('storage/images/' . basename($libro->imagen)) }}" alt="Foto de Usuario" class="card-img-top img-fluid" style=" height: 300px; width:200px;">
                @else
                    <img src="{{ asset('images/libronoencontrado.jpg') }}" alt="Imagen por Defecto" class="card-img-top img-fluid" style="object-fit: cover; height: 300px;">
                @endif
                <form method="POST" action="{{route('libro.update',$libro->cod_libro)}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Titulo:</label>
                        <input type="text" class="form-control" name="titulo" value="{{$libro->nombre}}">
                        @error('titulo')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio:</label>
                        <input type="text" class="form-control" name="precio" value="{{$libro->precio}}">
                        @error('precio')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="ISBN" class="form-label">ISBN:</label>
                        <input type="text" class="form-control" name="ISBN" value="{{$libro->ISBN}}">
                        @error('ISBN')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="edicion" class="form-label">Edicion:</label>
                        <input type="text" class="form-control" name="edicion" value="{{$libro->edicion}}">
                        @error('edicion')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">stock:</label>
                        <input type="text" class="form-control" name="stock" value="{{$libro->stock}}">
                        @error('stock')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Imagen</label>
                        <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" >
                        <small class="form-text text-muted">Formato permitido (jpg, jpeg, png).</small>
                        @error('imagen')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción del Libro</label>
                        <textarea class="form-control" name="descripcion" rows="5">{{$libro->descripcion}}</textarea>
                        @error('descripcion')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
    </div>
</div>
@endsection
