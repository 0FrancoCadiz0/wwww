@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header"><h4 align="center">Administrar Cuentas</h4></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <h2>Cuentas Usuarios</h2>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Codigo Libro</th>x
                                        <th>Nombre</th>
                                        <th>Herramientas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($libro as $l)
                                        <tr>
                                            <td>{{$l->cod_libro}}</td>
                                            <td>{{$l->nombre}}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <form method="POST" action="">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button  type="submit" class="btn btn-danger">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                            </svg> Eliminar
                                                        </button>
                                                    </form>
                                                    <a href="{{route('control.editLibro', $l->cod_libro)}}" data-bs-toggle="tooltip">
                                                        <button class="btn btn-primary btn-edit">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                            </svg> Editar
                                                        </button>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Crea un Libro</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('newLibro.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Titulo:</label>
                            <input type="text" class="form-control" name="titulo">
                            @error('titulo')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio:</label>
                            <input type="text" class="form-control" name="precio">
                            @error('precio')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="ISBN" class="form-label">ISBN:</label>
                            <input type="text" class="form-control" name="ISBN" >
                            @error('ISBN')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="edicion" class="form-label">Edicion:</label>
                            <input type="text" class="form-control" name="edicion" >
                            @error('edicion')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-label">stock:</label>
                            <input type="text" class="form-control" name="stock">
                            @error('stock')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="imagen" class="form-label">Imagen</label>
                            <input type="file" class="form-control" name="imagen" accept="image/*" >
                            <small class="form-text text-muted">Formato permitido (jpg, jpeg, png).</small>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción del Libro</label>
                            <textarea class="form-control" name="descripcion" rows="5"></textarea>
                            @error('descripcion')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <h2>Otros Datos</h2>
                        <div class="mb-3">
                            //Apoyo <br>
                            @foreach ( $clasificacion as $c )
                                <label>{{$c->cod_clasificacion}}={{$c->nom_clasificacion}}//</label>
                            @endforeach <br>
                            //
                            <br>
                            <label for="clasificacion" class="form-label">Clasificacion:</label>
                            <input type="text" class="form-control" name="clasificacion" >
                            @error('clasificacion')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            //Apoyo <br>
                            @foreach ( $al as $al)
                                    @foreach ($autor as $a)
                                        @if($a->cod_autor == $al->cod_autor)
                                            {{$a->cod_autor}}={{ $a->nom_autor }} {{ $a->apellido_autor }}//
                                        @endif
                                    @endforeach
                            @endforeach <br>
                            //
                            <br>
                            <label for="autor" class="form-label">Autor:</label>
                            <input type="text" class="form-control" name="autor" >
                            @error('autor')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            //Apoyo <br>
                            @foreach ( $el as $el)
                                    @foreach ($editorial as $e)
                                        @if($e->cod_editorial == $el->cod_editorial)
                                            {{$e->cod_editorial}}={{ $e->nom_editorial }}//
                                        @endif
                                    @endforeach
                            @endforeach <br>
                            //
                            <br>
                            <label for="editorial" class="form-label">Editorial:</label>
                            <input type="text" class="form-control" name="editorial" >
                            @error('editorial')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            //Apoyo <br>
                            @foreach ($il as $il)
                                    @foreach ($idioma as $i)
                                        @if($i->cod_idioma == $il->cod_idioma)
                                            {{$i->cod_idioma}}={{ $i->nom_idioma }}//
                                        @endif
                                    @endforeach
                            @endforeach <br>
                            //
                            <br>
                            <label for="idioma" class="form-label">Idioma:</label>
                            <input type="text" class="form-control" name="idioma" >
                            @error('idioma')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            //Apoyo <br>
                            @foreach ($gl as $gl)
                                    @foreach ($genero as $g)
                                        @if($g->cod_genero == $gl->cod_genero)
                                            {{$g->cod_genero}}={{ $g->nom_genero }}//
                                        @endif
                                    @endforeach
                            @endforeach <br>
                            //
                            <br>
                            <label for="genero" class="form-label">Genero:</label>
                            <input type="text" class="form-control" name="genero" >
                            @error('genero')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Registrar</button>
                    </form>  
                </div>
            </div>
        </div>
</div>
@endsection                                    