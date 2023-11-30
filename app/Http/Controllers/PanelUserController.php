<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Usuario; 
use Gate;

class PanelUserController extends Controller
{
    public function panelUser(){
        if(Gate::denies('usuarios-listar')){
            return redirect()->route('home.home');
        }
        $usuarios = Usuario::all();
        return view('control.panelUser', compact('usuarios'));
    }

    public function update(Usuario $usuario, Request $request)
    {
        $usuario->nom_cliente = $request->nombre;
        $usuario->apellido_cliente = $request->apellido;
        $usuario->rut = $request->rut;
        $usuario->email = $request->email;
        $usuario->fono = $request->fono;
    
        // Verificar si se proporcionó una nueva imagen
        if ($request->hasFile('imagen')) {
            // Borrar la imagen actual si existe
            if ($usuario->imagen) {
                Storage::delete($usuario->imagen);
            }
    
            // Subir la nueva imagen
            $usuario->imagen = $request->file('imagen')->store('public/images');
        }
    
        $usuario->save();
        return redirect()->route('home.account');
    }

    public function update2(Usuario $usuario, Request $request)
    {
        $usuario->postal = $request->postal;
        $usuario->region = $request->region;
        $usuario->comuna = $request->comuna;
        $usuario->ciudad = $request->ciudad;
        $usuario->direccion = $request->direccion;
    
        $usuario->save();
        return redirect()->route('home.account');
    }
}    
