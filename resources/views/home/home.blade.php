@extends('layouts.layout')

@section('content')
    <br>
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div id="carousel" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="images/Publi1.jpg" height="350px" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: black; background-color:#ffffff9d;">🔥 🚨ALERTA DE CONCURSO 🚨 🔥</h5>
                        <p class="fondo-de-color" ><b>
                            QUIERES GANAR $50.000 en libros ?
                            Solo deben seguir los siguentes pasos colocados en 
                            nuestro instagram mundo_libros_libros 👀.
                        </b></p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="images/Publi2.jpg" height="350px" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p class="fondo-de-color" ><b>Tres de los libros mas vendidos en un pack por solo $18.000</b></p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="images/Publi3.jpg" height="350px" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p class="fondo-de-color" ><b>Saga de Percy Jackson a $15.000</b></p>
                    </div>
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-2 text-center">
            <a class="nav-link" href="{{ route('home.catalogo') }}">
                <button class="boton" herf="route">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                    </svg> CATALOGO 
                </button>
            </a>
        </div>
    </div>
@endsection