<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autores;
use App\Models\Editorial; 
use App\Models\Genero; 
use App\Models\Idioma; 
use App\Models\Clasificacion; 
use App\Models\Pago; 


class GestionController extends Controller
{
    public function autor_editorial(){
        $autor = Autores::all();
        $editorial = Editorial::all();
        $genero = Genero::all();
        $idioma = Idioma::all();
        $clasificacion = Clasificacion::all();
        $pago = Pago::all();
        return view('control.autor-editorial', compact('autor','editorial','genero','idioma','clasificacion','pago'));
    }
}