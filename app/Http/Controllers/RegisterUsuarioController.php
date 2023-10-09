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
        $newUser->cod_pedido = 1;
        $nextCodDireccion = Usuario::max('cod_direccion') + 1;
        $newUser->cod_direccion = $nextCodDireccion;
        $newUser->save();
        return redirect()->route('home.login');
        }
}
