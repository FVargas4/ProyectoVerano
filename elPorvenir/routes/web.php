<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PendienteController;
use App\Http\Controllers\InstruccionController;
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

Route::get('/laravel', function () {
    return view('welcome');
});

//Rutas para el CRUD de pendientes
Route::resource('/pendientes', PendienteController::class);
Route::get('/pendientes/{id}/show', [PendienteController::class, 'show']);

//Rutas para el CRUD de instrucciones
Route::resource('/instrucciones', InstruccionController::class);
Route::get('/instrucciones/{id}/show', [InstruccionController::class, 'show']);



/*Route::get('test-db', function(){
    try{
       DB::connection() -> getPdo();
        echo "Conectado correctamente a " . DB::connection() -> getDatabaseName();
    }catch(\Exception $e){
        die("Error" . $e);
    }
});*/

Route::get('/', [LandingController::class, 'home2']);