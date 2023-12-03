<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash; 
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

    public function editU(Usuario $usuario){
        return view('control.usuarioedit', compact('usuario'));
    }

    public function updateU(Usuario $usuario, Request $request){
        $usuario->nom_cliente = $request->nombre;
        $usuario->apellido_cliente = $request->apellido;
        $usuario->rut = $request->rut;
        $usuario->email = $request->email;
        $usuario->fono = $request->fono;
        $usuario->postal = $request->postal;
        $usuario->region = $request->region;
        $usuario->comuna = $request->comuna;
        $usuario->ciudad = $request->ciudad;
        $usuario->direccion = $request->direccion;
    
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
        return redirect()->route('control.panelUser');
    }

    public function storePanel(Request $request){
        $newUser = new Usuario();
        $newUser->nom_cliente = $request->name;
        $newUser->apellido_cliente = $request->lastName;
        $newUser->rut = $request->rut;
        $newUser->email = $request->email;
        $newUser ->password = Hash::make($request->password);
        $newUser->fono = $request->fono;
        $newUser->id_tipoCuenta = $request->tipo;
        $newUser->imagen = null;
        $newUser->postal = '';
        $newUser->region = '';
        $newUser->comuna = '';
        $newUser->ciudad = '';
        $newUser->direccion = '';
        $newUser->save();
        return redirect()->route('control.panelUser');
        }

        public function destroy($user){
        $user =  Usuario::findOrFail($user);
        $user->delete();
        return redirect()->route('control.panelUser');
    }
}    
