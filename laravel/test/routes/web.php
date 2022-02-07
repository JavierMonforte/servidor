<?php

use App\Http\Controllers\controllerPrueba;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudyController;

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
//Route::get('saludo/{name}', [controllerPrueba::class, 'saludo']);
//Route::get('hola', [controllerPrueba::class, 'hola']);
Route::resource('studies', StudyController::class);
// Route::get('studies', [StudyController::class, 'index']);
// Route::get('studies/create', [StudyController::class, 'create']);
// Route::get('studies/{id}', [StudyController::class, 'show']);
// Route::post('studies', [StudyController::class, 'store']);
// Route::get('studies/{id}/edit', [StudyController::class, 'edit']);
// Route::put('studies/{id}', [StudyController::class, 'update']);
// Route::delete('studies/{id}', [StudyController::class, 'destroy']);
Route::resource('users', UserController::class);
// Route::get('users', [UserController::class, 'index']);
// Route::get('users/create', [UserController::class, 'create']);
// Route::get('users/{id}', [UserController::class, 'show']);
// Route::post('users', [UserController::class, 'store']);
// Route::get('users/{id}/edit', [UserController::class, 'edit']);
// Route::put('users/{id}', [UserController::class, 'update']);
// Route::delete('users/{id}', [UserController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
