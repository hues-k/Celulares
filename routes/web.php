<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CelularesController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\TelefonosControlle;

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

Route::view('/', 'home')->name('home');
Route::get('/',[TelefonosControlle::class, 'index'])->name('marcas.categorias');
Route::post('/',[TelefonosControlle::class, 'SusModelos'])->name('marcas.mo');


Route::get('/AgregarCel', [MarcasController::class, 'index'])->name('Marcas.index');


//Route::view('/home/AgregarCel', 'AgregarCel')->name('AgregarCel');
Route::post('/AgregarCel', [CelularesController::class, 'store'])->name('celular.store');







// Route::get('AgregarCelula',[MarcasController::class, 'index']);  
// //Route::get('/',[CelularesController::class, 'index']);  
// Route::view('/AgregarCelula', 'AgregarCelula')->name('AgregarCelular');  
// Route::get('/{id}', [CelularesController:: class, 'select']);
// Route::post('/home', [CelularesController::class, 'store'])->name('celular.store');