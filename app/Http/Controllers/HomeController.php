<?php

namespace App\Http\Controllers;

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

    public function register() {
        return view('home.register');
    }
}
