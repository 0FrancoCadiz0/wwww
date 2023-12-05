<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
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
use App\Http\Requests\LibroRequest;
use App\Http\Requests\NuevoLibroRequest;

use Gate;



class GestionController extends Controller
{
    public function autor_editorial(){
        $autor = Autores::all();
        $editorial = Editorial::all();
        $genero = Genero::all();
        $idioma = Idioma::all();
        $clasificacion = Clasificacion::all();
        $pago = Pago::all();
        if(Gate::denies('usuarios-listar')){
            return redirect()->route('home.home');
        }
        return view('control.autor-editorial', compact('autor','editorial','genero','idioma','clasificacion','pago'));
    }

    public function editA(Autores $autor){
        return view('control.autoredit', compact('autor'));
    }

    public function updateA(Autores $autor, Request $request){
        $autor->nom_autor = $request->nombreAE;
        $autor->apellido_autor = $request->apellidoAE;
        $autor->save();
        return redirect()->route('control.autor-editorial');
    }
    public function store_autor(Request $request){
        $autor = new Autores();
        $autor->nom_autor = $request->nombre;
        $autor->apellido_autor = $request->apellido;
        $ultimoCodigo = Autores::max('cod_autor');
        // Verificar si hay huecos en los códigos
        $codigosExistente = Autores::pluck('cod_autor')->toArray();
        $codigosFaltantes = array_diff(range(1, $ultimoCodigo + 1), $codigosExistente);
        // Tomar el primer código faltante o incrementar el máximo en 1
        $nuevoCodigo = !empty($codigosFaltantes) ? min($codigosFaltantes) : $ultimoCodigo + 1;
        $autor->cod_autor = $nuevoCodigo;
        $autor->save();
        return redirect()->route('control.autor-editorial');
    }

    public function editE(Editorial $editorial){
        return view('control.editorialedit', compact('editorial'));
    }

    public function updateE(Editorial $editorial, Request $request){
        $editorial->nom_editorial = $request->nombreEE;
        $editorial->save();
        return redirect()->route('control.autor-editorial');
    }

    public function store_editorial(Request $request){
        $editorial = new Editorial();
        $editorial->nom_editorial = $request->nombre;
        $ultimoCodigo = Editorial::max('cod_editorial');
        // Verificar si hay huecos en los códigos
        $codigosExistente = Editorial::pluck('cod_editorial')->toArray();
        $codigosFaltantes = array_diff(range(1, $ultimoCodigo + 1), $codigosExistente);
        // Tomar el primer código faltante o incrementar el máximo en 1
        $nuevoCodigo = !empty($codigosFaltantes) ? min($codigosFaltantes) : $ultimoCodigo + 1;
        $editorial->cod_editorial = $nuevoCodigo;
        $editorial->save();
        return redirect()->route('control.autor-editorial');
    }

    public function editG(Genero $genero){
        return view('control.generoedit', compact('genero'));
    }

    public function updateG(Genero $genero, Request $request){
        $genero->nom_genero = $request->nombreGE;
        $genero->save();
        return redirect()->route('control.autor-editorial');
    }
    
    public function store_genero(Request $request){
        $genero = new Genero();
        $genero->nom_genero = $request->nombre;
        $ultimoCodigo = Genero::max('cod_genero');
        // Verificar si hay huecos en los códigos
        $codigosExistente = Genero::pluck('cod_genero')->toArray();
        $codigosFaltantes = array_diff(range(1, $ultimoCodigo + 1), $codigosExistente);
        // Tomar el primer código faltante o incrementar el máximo en 1
        $nuevoCodigo = !empty($codigosFaltantes) ? min($codigosFaltantes) : $ultimoCodigo + 1;
        $genero->cod_genero = $nuevoCodigo;
        $genero->save();
        return redirect()->route('control.autor-editorial');
    }

    public function editI(Idioma $idioma){
        return view('control.idiomaedit', compact('idioma'));
    }

    public function updateI(Idioma $idioma, Request $request){
        $idioma->nom_idioma = $request->nombreIE;
        $idioma->save();
        return redirect()->route('control.autor-editorial');
    }

    public function store_idioma(Request $request){
        $idioma = new Idioma();
        $idioma->nom_idioma = $request->nombre;
        $ultimoCodigo = Idioma::max('cod_idioma');
        // Verificar si hay huecos en los códigos
        $codigosExistente = Idioma::pluck('cod_idioma')->toArray();
        $codigosFaltantes = array_diff(range(1, $ultimoCodigo + 1), $codigosExistente);
        // Tomar el primer código faltante o incrementar el máximo en 1
        $nuevoCodigo = !empty($codigosFaltantes) ? min($codigosFaltantes) : $ultimoCodigo + 1;
        $idioma->cod_idioma = $nuevoCodigo;
        $idioma->save();
        return redirect()->route('control.autor-editorial');
    }

    public function editC(Clasificacion $clasificacion){
        return view('control.clasificacionedit', compact('clasificacion'));
    }

    public function updateC(Clasificacion $clasificacion, Request $request){
        $clasificacion->nom_clasificacion = $request->nombreCE;
        $clasificacion->save();
        return redirect()->route('control.autor-editorial');
    }

    public function store_clasificacion(Request $request){
        $clasificacion = new Clasificacion();
        $clasificacion->nom_clasificacion = $request->nombre;
        $ultimoCodigo = Clasificacion::max('cod_clasificacion');
        // Verificar si hay huecos en los códigos
        $codigosExistente = Clasificacion::pluck('cod_clasificacion')->toArray();
        $codigosFaltantes = array_diff(range(1, $ultimoCodigo + 1), $codigosExistente);
        // Tomar el primer código faltante o incrementar el máximo en 1
        $nuevoCodigo = !empty($codigosFaltantes) ? min($codigosFaltantes) : $ultimoCodigo + 1;
        $clasificacion->cod_clasificacion = $nuevoCodigo;
        $clasificacion->save();
        return redirect()->route('control.autor-editorial');
    }

    public function editP(Pago $pago){
        return view('control.pagoedit', compact('pago'));
    }

    public function updateP(Pago $pago, Request $request){
        $pago->metodo_pago = $request->nombrePsE;
        $pago->save();
        return redirect()->route('control.autor-editorial');
    }

    public function store_pago(Request $request){
        $pago = new Pago();
        $pago->metodo_pago = $request->nombre;
        $ultimoCodigo = Pago::max('cod_pago');
        // Verificar si hay huecos en los códigos
        $codigosExistente = Pago::pluck('cod_pago')->toArray();
        $codigosFaltantes = array_diff(range(1, $ultimoCodigo + 1), $codigosExistente);
        // Tomar el primer código faltante o incrementar el máximo en 1
        $nuevoCodigo = !empty($codigosFaltantes) ? min($codigosFaltantes) : $ultimoCodigo + 1;
        $pago->cod_pago = $nuevoCodigo;
        $pago->save();
        return redirect()->route('control.autor-editorial');
    }

    public function ViewLibro(){
        $libro = Libros::all();
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
        return view('control.gestionLibros', compact('libro', 'autor','editorial','genero','idioma','clasificacion','pago', 'al', 'gl', 'il', 'el',));
    }
    public function editL(Libros $libro){
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
        return view('control.editLibro', compact('libro', 'autor','editorial','genero','idioma','clasificacion','pago', 'al', 'gl', 'il', 'el',));
    }

    public function updateL(Libros $libro, LibroRequest  $request){
        $libro->nombre = $request->titulo;
        $libro->precio = $request->precio;
        $libro->ISBN = $request->ISBN;
        $libro->edicion = $request->edicion;
        $libro->stock = (int)$request->stock;
        // Verificar si se proporcionó una nueva imagen
        if ($request->hasFile('imagen')) {
            // Borrar la imagen actual si existe
            if ($libro->imagen) {
                Storage::delete($libro->imagen);
            }
            // Subir la nueva imagen
            $libro->imagen = $request->file('imagen')->store('public/images');
        }
        $libro->descripcion = $request->descripcion;
        $libro->save();
        return redirect()->route('control.gestionLibros');
    }
    public function store_libro(Request  $request){
        $libro = new Libros();
        $ultimoCodigo = Libros::max('cod_libro');
        // Verificar si hay huecos en los códigos
        $codigosExistente = Libros::pluck('cod_libro')->toArray();
        $codigosFaltantes = array_diff(range(1, $ultimoCodigo + 1), $codigosExistente);
        // Tomar el primer código faltante o incrementar el máximo en 1
        $nuevoCodigo = !empty($codigosFaltantes) ? min($codigosFaltantes) : $ultimoCodigo + 1;
        $libro->cod_libro = $nuevoCodigo;
        $libro->cod_clasificacion = $request->clasificacion;
        $libro->nombre = $request->titulo;
        $libro->precio = $request->precio;
        $libro->ISBN = $request->ISBN;
        $libro->edicion = $request->edicion;
        $libro->stock = (int)$request->stock;
        $libro->imagen = $request->file('imagen')->store('public/images');
        $libro->descripcion = $request->descripcion;
        $libro->save();
        $autor = new AutoresLibro();
        $autor->cod_libro = $nuevoCodigo;
        $autor->cod_autor = $request->autor;
        $autor->save();
        $editorial = new EditorialLibro();
        $editorial->cod_libro = $nuevoCodigo;
        $editorial->cod_editorial = $request->editorial;
        $editorial->save();
        $idioma = new IdiomaLibro();
        $idioma->cod_libro = $nuevoCodigo;
        $idioma->cod_idioma = $request->idioma;
        $idioma->save();
        $genero = new GeneroLibro();
        $genero->cod_libro = $nuevoCodigo;
        $genero->cod_genero = $request->genero;
        $genero->save();
        
        return redirect()->route('control.gestionLibros');
    }
}
