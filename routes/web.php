<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController; //uso en controlador de usuario
use App\Http\Controllers\homeController;
use App\Http\Controllers\RecetaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/

Route::get('/',function(){
    return view('index');
});
//CONTROLADOR HOME
Route::controller(homeController::class)->group(
    function()
    {
        Route::get('/perfil','cargarPerfil')->name('cargar.perfil');
        Route::get('/registro', 'cargarLoguin')->name('cargar.loguin');
    });
//CONTROLADOR DE RECETA 
Route::controller(UsuarioController::class)->group(
    function()
    {
        Route::get('receta/index','index')->name('receta.index');
        Route::post('receta/create','create')->name('receta.create');
    });
        
Route::resource('usuario',UsuarioController::class);
// Route::resource('usuario',UsuarioController::class)-> middleware('autenticacion');

//CONTROLADOR DE USUARIO 
Route::controller(UsuarioController::class)->group(
    function()
    {
        Route::post('usuario/create','create')->name('usuario.create');
    });
    
//  Route::get('/index', [UsuarioController::class, 'index'])->name('index');
//  //cuando usuario se loguee que vaya a ruta siguiente:
//  Route::group(['middleware' => 'auenticacion'], function () {
//     Route::get('/', [UsuarioController::class, 'index'])->name('index');
// });
