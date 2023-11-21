@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h2 class="mb-0">Contáctanos</h2>
                </div>
                <div class="card-body">
                    <p class="lead">¿Tienes alguna pregunta o sugerencia? ¡Contáctanos para obtener más información!</p>
                    
                    <h4 class="mt-4 mb-3">Redes Sociales</h4>
                    <div class="media">
                        <img src="{{ asset('images/ig.png') }}" class="mr-3" alt="Instagram" width="30">
                        <div class="media-body">
                            <ul>
                                <li><a href="https://www.instagram.com/_mundo_libros/" target="_blank">Instagram: @_mundo_libros</a></li>
                                <li><a href="https://www.instagram.com/mundo_libros_catalogo/" target="_blank">Instagram (Catálogo): mundo_libros_catalogo</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <h4 class="mt-4 mb-3">WhatsApp</h4>
                    <div class="media">
                        <img src="{{ asset('images/ws.png') }}" class="mr-3" alt="WhatsApp" width="30">
                        <div class="media-body">
                            <p><a href="https://api.whatsapp.com/send?phone=56950616721" target="_blank">Encarga tus libros por WhatsApp</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

