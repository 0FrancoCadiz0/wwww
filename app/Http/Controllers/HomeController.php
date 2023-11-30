<?php

namespace App\Http\Controllers;
use App\Models\Usuario; 
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except('login');
    }



    public function index(){
        //dd('hola mundo'); //dump and die
        return view('home.home');
    }

    public function login(){
        return view('home.login');
    }

    public function info1(){
        return view('home.quienes');
    }

    public function info2(){
        return view('home.contacto');
    }

    public function info3(){
        $usuario = Auth::user();
        return view('home.account', compact('usuario'));
    }
}
