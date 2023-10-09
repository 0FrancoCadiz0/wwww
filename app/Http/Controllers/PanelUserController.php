<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
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
}