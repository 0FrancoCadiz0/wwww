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
                                        <th>Nombre</th>x
                                        <th>Rut</th>
                                        <th>Email</th>
                                        <th>Celular</th>
                                        <th>Tipo de Cuenta</th>
                                        <th>Herramientas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($usuarios as $user)
                                        @if($user->id_tipoCuenta == 2)
                                            <tr>
                                                <td>{{$user->nom_cliente}} {{$user->apellido_cliente}}</td>
                                                <td>{{$user->rut}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->fono}}</td>
                                                <td>
                                                    @if($user->id_tipoCuenta == 2)
                                                    Usuario
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <form method="POST" action="{{ route('usuario.destroy', $user->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button  type="submit" class="btn btn-danger">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                                </svg> Eliminar
                                                            </button>
                                                        </form>
                                                        <a href="{{ route('control.usuarioedit', $user->id) }}" data-bs-toggle="tooltip">
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
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        <h2>Cuentas Administradores</h2>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>x
                                        <th>Rut</th>
                                        <th>Email</th>
                                        <th>Celular</th>
                                        <th>Tipo de Cuenta</th>
                                        <th>Herramientas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($usuarios as $user)
                                        @if ($user->id_tipoCuenta == 1)
                                            <tr>
                                                <td>{{$user->nom_cliente}} {{$user->apellido_cliente}}</td>
                                                <td>{{$user->rut}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->fono}}</td>
                                                <td>
                                                    @if ($user->id_tipoCuenta == 1)
                                                    Admin
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <form method="POST" action="{{ route('usuario.destroy', $user->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button  type="submit" class="btn btn-danger">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                                </svg> Eliminar
                                                            </button>
                                                        </form>
                                                        <a href="{{ route('control.usuarioedit', $user->id) }}" data-bs-toggle="tooltip">
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
                                        @endif
                                    @endforeach                
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Crea tu Cuenta</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('newUserPanelControl.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombres</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="lastName" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" required>
                        </div>
                        <div class="mb-3">
                            <label for="rut" class="form-label">Rut</label>
                            <input type="text" class="form-control" id="rut" name="rut" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="fono" class="form-label">Número de Celular</label>
                            <input type="text" class="form-control" id="fono" name="fono" required>
                        </div>
                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo Cuenta</label>
                            <input type="text" class="form-control" id="tipo" name="tipo">
                            <p>(1=Admin 2=Usuario)</p>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Registrar</button>
                    </form>  
                </div>
            </div>
        </div>
</div>
@endsection