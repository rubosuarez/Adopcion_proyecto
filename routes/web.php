<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AnimalesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('donaciones', function () {
    return view('donaciones');
});
Route::resource('adopcion',AnimalesController::class);
Auth::routes();
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('projects',ProjectController::class);
Route::get('contacta',[ContactaController::class,'index'])->name('contacta.index');  
Route::post('contacta',[ContactaController::class,'store'])->name('contacta.store'); 
Route::get('adopcion/perros', [AnimalesController::class,'create'])->name('adopcion.perros');
Route::get('adopcion/gatos', [AnimalesController::class,'create'])->name('adopcion.gatos');
Route::get('anadirPerros',[AnimalesController::class,'create'])->name('adopcion.anadir_perros');
Route::get('anadirGatos',[AnimalesController::class,'create'])->name('adopcion.anadir_gatos');
Route::post('anadirPerros',[AnimalesController::class,'store'])->name('adopcion.store_perros');
Route::post('anadirGatos',[AnimalesController::class,'store'])->name('adopcion.store_gatos');
Route::post('editar/{Animal}',[AnimalesController::class,'edit'])->name('adopcion.edit');
Route::put('adopcion/{Animal}',[AnimalesController::class,'update'])->name('adopcion.actualizar_adoptante');
Route::put('actualizar',[AnimalesController::class,'update2'])->name('adopcion.update2');
Route::post('adopcion/{Animal}',[AnimalesController::class,'destroy'])->name('adopcion.eliminar');
Route::get('adopcion/{perro}', [AnimalesController::class, 'show'])->name('perros.show');
Route::get('perros',[AnimalesController::class,'perros'])->name('animal.perros'); 
Route::get('gatos',[AnimalesController::class,'gatos'])->name('animal.gatos'); 
Route::get('adoptantes',[AnimalesController::class,'adoptantes'])->name('animal.adoptantes'); 
Route::get('privacidad',[AnimalesController::class,'privacidad'])->name('animales.privacidad'); 
Route::get('cookies',[AnimalesController::class,'cookies'])->name('animales.cookies'); 


Route::group(['middleware'=>['auth']],function(){
    Route::resource('roles',RolController::class);
    Route::resource('usuarios',UsuarioController::class);
    Route::resource('animales',AnimalesController::class);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
