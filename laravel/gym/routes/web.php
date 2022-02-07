<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\SesionController;


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
Route::resource ('users', UserController::class);
// Route::get('users', [UserController::class, 'index']);
// Route::get('users/create', [UserController::class, 'create']);
// Route::get('users/{id}', [UserController::class, 'show']);
// Route::post('users', [UserController::class, 'store']);
// Route::get('users/{id}/edit', [UserController::class, 'edit']);
// Route::put('users/{id}', [UserController::class, 'update']);
// Route::delete('users/{id}', [UserController::class, 'destroy']);

//rutas -> plural
//tablas -> plural
//controladores y modelos -> singular
Route::resource ('activities', ActivityController::class);
// Route::get('activities', [ActivityController::class, 'index']);
// Route::get('activities/create', [ActivityController::class, 'create']);
// Route::get('activities/{id}', [ActivityController::class, 'show']);
// Route::post('activities', [ActivityController::class, 'store']);
// Route::get('activities/{id}/edit', [ActivityController::class, 'edit']);
// Route::put('activities/{id}', [ActivityController::class, 'update']);
// Route::delete('activities/{id}', [ActivityController::class, 'destroy']);

Route::resource ('sesions', SesionController::class);
// Route::get('sesions', [ActivityController::class, 'index']);
// Route::get('sesions/create', [ActivityController::class, 'create']);
// Route::get('sesions/{id}', [ActivityController::class, 'show']);
// Route::post('sesions', [ActivityController::class, 'store']);
// Route::get('sesions/{id}/edit', [ActivityController::class, 'edit']);
// Route::put('sesions/{id}', [ActivityController::class, 'update']);
// Route::delete('sesions/{id}', [ActivityController::class, 'destroy']);
//rutas -> plural
//tablas -> plural
//controladores y modelos -> singular

Auth::routes();

Route::get('/search', [App\Http\Controllers\SesionController::class, 'search'])->name('search');
//Route::get('/sesions/createAll', [App\Http\Controllers\SesionController::class, 'createAll']);
//Route::post('/storeAll', [App\Http\Controllers\SesionController::class, 'storeAll']);