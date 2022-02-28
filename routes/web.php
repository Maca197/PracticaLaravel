<?php

use App\Http\Controllers\TareasController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/tarea', TareasController::class);
// Route::get('/tarea', [TareasController::class, 'index']);
// Route::get('/tarea/create', [TareasController::class, 'create']);
// Route::post('/tarea/store', [TareasController::class, 'store']);



Route::get('/hola-mundo', function () {
    return view('paginas/hola-mundo');
});
Route::get('/grabaciones/{nombre}', function ($nombre) {
    $otra = 'La otra variable';
    return view('paginas/grabaciones',compact('nombre','otra'));
    // ->with([
    //     'nombre' => 'Sabe quien',
    //     'otra' => $nombre
    // ]);
});
