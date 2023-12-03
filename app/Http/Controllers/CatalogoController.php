<?php

namespace App\Http\Controllers;
use App\Models\Autores;
use App\Models\Editorial; 
use App\Models\Genero; 
use App\Models\Idioma; 
use App\Models\Clasificacion; 
use App\Models\Pago;
use App\Models\Libros;

use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function ViewCatalogo(){
        $libro = Libros::all();
        return view('home.catalogo', compact('libro'));
    }
    public function Mostrar(Libros $libro){
        return view('control.verLibro', compact('libro'));
    }
}
