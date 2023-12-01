@extends('layouts.layout')

@section('content')

<link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet">

<div class="desktop-faq-container">
    <input type="radio" name="tabs" checked="checked" />
    <input id="tab-1" type="radio" name="tabs" />
    <input id="tab-2" type="radio" name="tabs" />
    <input id="tab-3" type="radio" name="tabs" />
    <input id="tab-4" type="radio" name="tabs" />
    <input id="tab-5" type="radio" name="tabs" />
    <input id="tab-6" type="radio" name="tabs" />
    <div class="tabs">
        <label class="col-xs-2" for="tab-1">
            <div class="element">
                <img src="https://www.pompeiibrand.com/skin/frontend/pompeii/default/images/faq_1.svg" alt="" />
                <h3>Autores</h3>
            </div>
        </label>
        <label class="col-xs-2" for="tab-2">
            <div class="element">
                <img src="https://www.pompeiibrand.com/skin/frontend/pompeii/default/images/faq_2.svg" alt="" />
                <h3>Editoriales</h3>
            </div>
        </label>
        <label class="col-xs-2" for="tab-3">
            <div class="element">
                <img src="https://www.pompeiibrand.com/skin/frontend/pompeii/default/images/faq_3.svg" alt="" />
                <h3>Generos</h3>
            </div>
        </label>
        <label class="col-xs-2" for="tab-4">
            <div class="element">
                <img src="https://www.pompeiibrand.com/skin/frontend/pompeii/default/images/faq_4.svg" alt="" />
                <h3>Idiomas</h3>
            </div>
        </label>
        <label class="col-xs-2" for="tab-5">
            <div class="element">
                <img src="https://www.pompeiibrand.com/skin/frontend/pompeii/default/images/faq_5.svg" alt="" />
                <h3>Clasificaciones Edad</h3>
            </div>
        </label>
        <label class="col-xs-2" for="tab-6">
            <div class="element">
                <img src="https://www.pompeiibrand.com/skin/frontend/pompeii/default/images/faq_6.svg" alt="" />
                <h3>Pagos</h3>
            </div> 
        </label>
    </div>
    <div class="content">
        <div class="tab">
            <div class="row justify-content-center">
                <div class="card col-lg-4">
                    <div class="card-header"><h2>Gestor Autores</h2></div>
                    <div class="card-body">
                        <form action="">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre Autor</label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>
                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellido Autor</label>
                                <input type="text" class="form-control" id="apellido" name="apellido">
                            </div>
                            <button type="button" class="btn btn-primary">Agregar</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Herramientas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($autor as $a)
                                <tr>
                                    <td>{{$a->nom_autor}}</td>
                                    <td>{{$a->apellido_autor}}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                </svg> Eliminar
                                            </button>
                                            <button class="btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg> Editar
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="tab">
            <div class="row justify-content-center">
                <div class="card col-lg-4">
                    <div class="card-header"><h2>Gestor Editoriales</h2></div>
                    <div class="card-body">
                        <form action="">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre Editorial</label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>
                            <button type="button" class="btn btn-primary">Agregar</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Herramientas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $editorial as $e )
                                <tr>
                                    <td>{{$e->nom_editorial}}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                </svg> Eliminar
                                            </button>
                                            <button class="btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg> Editar
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="tab">
            <div class="row justify-content-center">
                <div class="card col-lg-4">
                    <div class="card-header"><h2>Gestor Generos</h2></div>
                    <div class="card-body">
                        <form action="">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre Genero</label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>
                            <button type="button" class="btn btn-primary">Agregar</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Herramientas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $genero as $g )
                                <tr>
                                    <td>{{$g->nom_genero}}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                </svg> Eliminar
                                            </button>
                                            <button class="btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg> Editar
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="tab">
            <div class="row justify-content-center">
                <div class="card col-lg-4">
                    <div class="card-header"><h2>Gestor Idiomas</h2></div>
                    <div class="card-body">
                        <form action="">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre Idioma</label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>
                            <button type="button" class="btn btn-primary">Agregar</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Herramientas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $idioma as $i )
                                <tr>
                                    <td>{{$i->nom_idioma}}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                </svg> Eliminar
                                            </button>
                                            <button class="btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg> Editar
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="tab">
            <div class="row justify-content-center">
                <div class="card col-lg-4">
                    <div class="card-header"><h2>Gestor Clasificaciones Edad</h2></div>
                    <div class="card-body">
                        <form action="">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre Clasificacion</label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>
                            <button type="button" class="btn btn-primary">Agregar</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Herramientas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $clasificacion as $c )
                                <tr>
                                    <td>{{$c->nom_clasificacion}}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                </svg> Eliminar
                                            </button>
                                            <button class="btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg> Editar
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="tab">
            <div class="row justify-content-center">
                <div class="card col-lg-4">
                    <div class="card-header"><h2>Gestor Metodos De Pagos</h2></div>
                    <div class="card-body">
                        <form action="">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre Metodo de Pago</label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>
                            <button type="button" class="btn btn-primary">Agregar</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Herramientas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $pago as $p )
                                <tr>
                                    <td>{{$p->metodo_pago}}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                </svg> Eliminar
                                            </button>
                                            <button class="btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg> Editar
                                            </button>
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
</div>
@endsection