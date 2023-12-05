<?php

namespace App\Http\Controllers;
use App\Models\Autores;
use App\Models\Editorial; 
use App\Models\Genero; 
use App\Models\Idioma; 
use App\Models\Clasificacion; 
use App\Models\Pago;
use App\Models\AutoresLibro;
use App\Models\EditorialLibro;
use App\Models\GeneroLibro;
use App\Models\IdiomaLibro;
use App\Models\Libros;



use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function ViewCatalogo(){
        $libro = Libros::all();
        return view('home.catalogo', compact('libro'));
    }
    public function Mostrar(Libros $libro){
        $autor = Autores::all();
        $editorial = Editorial::all();
        $genero = Genero::all();
        $idioma = Idioma::all();
        $clasificacion = Clasificacion::all();
        $pago = Pago::all();
        $al = AutoresLibro::all();
        $gl = GeneroLibro::all();
        $il = IdiomaLibro::all();
        $el = EditorialLibro::all();
        return view('control.verLibro', compact('libro', 'autor','editorial','genero','idioma','clasificacion','pago', 'al', 'gl', 'il', 'el',));
    }
}

