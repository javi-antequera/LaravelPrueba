<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotasController;
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
    return view('principal');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/proyecto/{numero?}', function ($numero=1) {
    return ("<h2>Estás en el proyecto número: $numero</h2>");
})->where("numero","[0-9]+");

Route::get('notas', [ NotasController::class, 'notas' ]);
Route::get('notas/{id?}', [ NotasController::class, 'detalle' ]) -> name('notas.detalle');
Route::post('notas', [ NotasController::class, 'crear' ]) -> name('notas.crear');

Route::get('editar/{id}', [ NotasController::class, 'editar' ]) -> name('notas.editar');
Route::put('editar/{id}', [ NotasController::class, 'actualizar' ]) -> name('notas.actualizar');
Route::delete('eliminar/{id}', [ NotasController::class, 'eliminar' ]) -> name('notas.eliminar');