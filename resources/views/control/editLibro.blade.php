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
                        <button type="submit" class="btn btn-primary ms-auto">Guardar</button>
                    </div>
                </form>
                <h2>Editar Genero</h2><br>
                    @foreach ( $gl as $gl)
                        @if($gl->cod_libro == $libro->cod_libro)
                            @foreach ($genero as $g)
                                @if($g->cod_genero == $gl->cod_genero)
                                    <form action="" >
                                        @method('PUT')
                                        @csrf
                                        <label for="genero" class="form-label">Genero:</label>
                                        <input type="text" class="form-control" name="genero" value="{{$g->cod_genero}}">
                                        <label for="">({{$g->cod_genero}}={{$g->nom_genero}})</label>
                                        <div class="d-flex justify-content-between">
                                            <button type="submit" class="btn btn-primary ms-auto">Guardar</button>
                                        </div>
                                    </form>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                <br>
                <h2>Editar Autor</h2><br>
                @foreach ( $al as $al)
                    @if($al->cod_libro == $libro->cod_libro)
                        @foreach ($autor as $a)
                            @if($a->cod_autor == $al->cod_autor)
                                <form action="">
                                    @method('PUT')
                                    @csrf
                                    <label for="autor" class="form-label">Autor:</label>
                                    <input type="text" class="form-control" name="autor" value="{{$a->cod_autor}}">
                                    <label for="">({{$a->cod_autor}}={{$a->nom_autor}}) {{$a->apellido_autor}}</label>
                                    <div class="d-flex justify-content-between">
                                        <button type="submit" class="btn btn-primary ms-auto">Guardar</button>
                                    </div>
                                </form>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                <br>
                <h2>Editar Editorial</h2><br>
                @foreach ( $el as $el)
                    @if($el->cod_libro == $libro->cod_libro)
                        @foreach ($editorial as $e)
                            @if($e->cod_editorial == $el->cod_editorial)
                                <form action="">
                                    @method('PUT')
                                    @csrf
                                    <label for="editorial" class="form-label">Editorial:</label>
                                    <input type="text" class="form-control" name="editorial" value="{{$e->cod_editorial}}">
                                    <label for="">({{$e->cod_editorial}}={{$e->nom_editorial}})</label>
                                    <div class="d-flex justify-content-between">
                                        <button type="submit" class="btn btn-primary ms-auto">Guardar</button>
                                    </div>
                                </form>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                <br>
                <h2>Editar Idioma</h2><br>
                @foreach ( $il as $il)
                    @if($il->cod_libro == $libro->cod_libro)
                        @foreach ($idioma as $i)
                            @if($i->cod_idioma == $il->cod_idioma)
                                <form action="">
                                    @method('PUT')
                                    @csrf
                                    <label for="idioma" class="form-label">Idioma:</label>
                                    <input type="text" class="form-control" name="idioma" value="{{$i->cod_idioma}}">
                                    <label for="">({{$i->cod_idioma}}={{$i->nom_idioma}})</label>
                                    <div class="d-flex justify-content-between">
                                        <button type="submit" class="btn btn-primary ms-auto">Guardar</button>
                                    </div>
                                </form>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                <br>
                <h2>Editar Clasificacion Edad</h2><br>
                    @foreach ($clasificacion as $c)
                        @if($c->cod_clasificacion == $libro->cod_clasificacion)
                            <form action="">
                                @method('PUT')
                                @csrf
                                <label for="clasificacion" class="form-label">Clasificacion:</label>
                                <input type="text" class="form-control" name="clasificacion" value="{{$c->cod_clasificacion}}">
                                <label for="">({{$c->cod_clasificacion}}={{$c->nom_clasificacion}})</label>
                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn btn-primary ms-auto">Guardar</button>
                                </div>
                            </form>
                        @endif
                    @endforeach
                <br>
            </div>
    </div>
</div>
<br>
@endsection
