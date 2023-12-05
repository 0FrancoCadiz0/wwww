<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterUsuarioController;
use App\Http\Controllers\PanelUserController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\GestionController;
use App\Http\Controllers\CatalogoController;

Route::get('/',[HomeController::class,'index'])->name('home.home');
Route::get('/login',[HomeController::class,'login'])->name('home.login');

Route::get('/Quienes-Somos',[HomeController::class,'info1'])->name('home.quienes');
Route::get('/Contactanos',[HomeController::class,'info2'])->name('home.contacto');
Route::get('/Cuenta',[HomeController::class,'info3'])->name('home.account');

Route::get('/Catalogo',[CatalogoController::class,'ViewCatalogo'])->name('home.catalogo');
Route::get('/Catalogo/{libro}/libro', [CatalogoController::class, 'Mostrar'])->name('control.verLibro');

Route::post('/usuarios/register',[RegisterUsuarioController::class,'store'])->name('newUser.store');
Route::post('/usuariosPanelControl',[PanelUserController::class,'storePanel'])->name('newUserPanelControl.store');

Route::post('/usuarios/login',[UsuariosController::class,'login'])->name('usuarios.login');
Route::get('/usuarios/logout',[UsuariosController::class,'logout'])->name('usuarios.logout');

Route::get('/control',[PanelUserController::class,'panelUser'])->name('control.panelUser');

Route::put('/Cuentas/{usuario}',[PanelUserController::class,'update'])->name('usuario.update');
Route::put('/Cuentas2/{usuario}',[PanelUserController::class,'update2'])->name('usuario.update2');
Route::get('/Usuario/{usuario}/edit', [PanelUserController::class, 'editU'])->name('control.usuarioedit');
Route::put('/Usuario/{usuario}', [PanelUserController::class, 'updateU'])->name('usuario.update');
Route::delete('/Usuario/{user}', [PanelUserController::class, 'destroy'])->name('usuario.destroy');

Route::get('/Gestion-libros',[GestionController::class,'ViewLibro'])->name('control.gestionLibros');
Route::get('/Gestion-libros/{libro}/libro', [GestionController::class, 'editL'])->name('control.editLibro');
Route::put('/Gestion-libros/{libro}', [GestionController::class, 'updateL'])->name('libro.update');
Route::post('/Gestion', [GestionController::class, 'store_libro'])->name('newLibro.store');


Route::get('/autor-editorial',[GestionController::class,'autor_editorial'])->name('control.autor-editorial');

Route::post('/autor-editorial/autor',[GestionController::class,'store_autor'])->name('newAutor.store');
Route::get('/Autor/{autor}/edit', [GestionController::class, 'editA'])->name('control.autoredit');
Route::put('/Autor/{autor}', [GestionController::class, 'updateA'])->name('autor.update');

Route::post('/autor-editorial/editorial',[GestionController::class,'store_editorial'])->name('newEdit.store');
Route::get('/Editorial/{editorial}/edit', [GestionController::class, 'editE'])->name('control.editorialedit');
Route::put('/Editorial/{editorial}', [GestionController::class, 'updateE'])->name('editorial.update');

Route::post('/autor-editorial/genero',[GestionController::class,'store_genero'])->name('newGen.store');
Route::get('/Genero/{genero}/edit', [GestionController::class, 'editG'])->name('control.generoedit');
Route::put('/Genero/{genero}', [GestionController::class, 'updateG'])->name('genero.update');

Route::post('/autor-editorial/idioma',[GestionController::class,'store_idioma'])->name('newIdioma.store');
Route::get('/Idioma/{idioma}/edit', [GestionController::class, 'editI'])->name('control.idiomaedit');
Route::put('/Idioma/{idioma}', [GestionController::class, 'updateI'])->name('idioma.update');

Route::post('/autor-editorial/clasificacion',[GestionController::class,'store_clasificacion'])->name('newClas.store');
Route::get('/Clasificacion/{clasificacion}/edit', [GestionController::class, 'editC'])->name('control.clasificacionedit');
Route::put('/Clasificacion/{clasificacion}', [GestionController::class, 'updateC'])->name('clas.update');

Route::post('/autor-editorial/pago',[GestionController::class,'store_pago'])->name('newPago.store');
Route::get('/Pago/{pago}/edit', [GestionController::class, 'editP'])->name('control.pagoedit');
Route::put('/Pago/{pago}', [GestionController::class, 'updateP'])->name('pago.update');