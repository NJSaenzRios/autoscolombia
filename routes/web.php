<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\SalidaController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\CeldaController;
use Illuminate\Support\Facades\Auth;

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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/vehiculo', function () {
    return view('vehiculo.index');
});
*/
/*acceder mediante clases*/
/*
Route::get('vehiculo/create', [VehiculoController::class,'create']);

/*crear rutas de forma automarizada. COn esta instruccion se puede acceder a todas las rutas */

Route::get('/', function () {
    return view('auth.login');
});


Route::resource('vehiculo', VehiculoController::class);
Route::resource('ingreso', IngresoController::class)->middleware('auth');
Route::resource('salida', SalidaController::class);
Route::resource('pago', PagoController::class);
Route::resource('celda', CeldaController::class);
Auth::routes();

Route::get('/home', [IngresoController::class, 'index'])->name('home');

//cuando el usuario se logea va directamente a VehiculoController
Route::group(['middleware'=>'auth'], function (){
    //redireccion 
Route::get('/', [IngresoController::class, 'index'])->name('home');
});
