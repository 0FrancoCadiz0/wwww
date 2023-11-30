<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class RegisterUsuarioController extends Controller
{
    
    public function store(Request $request){
        $newUser = new Usuario();
        $newUser->nom_cliente = $request->name;
        $newUser->apellido_cliente = $request->lastName;
        $newUser->rut = $request->rut;
        $newUser->email = $request->email;
        $newUser ->password = Hash::make($request->password);
        $newUser->fono = $request->fono;
        $newUser->id_tipoCuenta = 2;
        $newUser->imagen = null;
        $newUser->postal = '';
        $newUser->region = '';
        $newUser->comuna = '';
        $newUser->ciudad = '';
        $newUser->direccion = '';
        $newUser->save();
        return redirect()->route('home.login');
        }
}
