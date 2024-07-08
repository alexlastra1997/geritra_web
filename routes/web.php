<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\PrecioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\SoporteController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/servicios', [ServicioController::class,'index'])->name('servicios');
Route::get('/productos', [ProductoController::class,'index'])->name('productos');
Route::get('/nosotros', [NosotrosController::class,'index'])->name('nosotros');
Route::get('/precios', [PrecioController::class,'index'])->name('precios');
Route::get('/soporte', [SoporteController::class,'index'])->name('soporte');
Route::get('/contactos', [ContactoController::class,'index'])->name('contactos');
