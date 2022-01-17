<?php

use App\Http\Controllers\controllerPrueba;
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
Route::get('saludo/{name}', [controllerPrueba::class, 'saludo']);
Route::get('hola', [controllerPrueba::class, 'hola']);