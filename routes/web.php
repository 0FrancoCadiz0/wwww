<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterUsuarioController;
use App\Http\Controllers\PanelUserController;
use App\Http\Controllers\UsuariosController;

Route::get('/',[HomeController::class,'index'])->name('home.home');
Route::get('/login',[HomeController::class,'login'])->name('home.login');

Route::get('/register',[HomeController::class,'register'])->name('home.register');
Route::post('/usuarios/register',[RegisterUsuarioController::class,'store'])->name('newUser.store');

Route::post('/usuarios/login',[UsuariosController::class,'login'])->name('usuarios.login');
Route::get('/usuarios/logout',[UsuariosController::class,'logout'])->name('usuarios.logout');

Route::get('/control',[PanelUserController::class,'panelUser'])->name('control.panelUser');
