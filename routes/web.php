<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterUsuarioController;
use App\Http\Controllers\PanelUserController;
use App\Http\Controllers\UsuariosController;

Route::get('/',[HomeController::class,'index'])->name('home.home');
Route::get('/login',[HomeController::class,'login'])->name('home.login');

Route::get('/Quienes-Somos',[HomeController::class,'info1'])->name('home.quienes');
Route::get('/Contactanos',[HomeController::class,'info2'])->name('home.contacto');

Route::post('/usuarios/register',[RegisterUsuarioController::class,'store'])->name('newUser.store');

Route::post('/usuarios/login',[UsuariosController::class,'login'])->name('usuarios.login');
Route::get('/usuarios/logout',[UsuariosController::class,'logout'])->name('usuarios.logout');

Route::get('/control',[PanelUserController::class,'panelUser'])->name('control.panelUser');
