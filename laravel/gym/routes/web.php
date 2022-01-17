<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ActivityController;

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
Route::resource ('members', MemberController::class);
// Route::get('members', [MemberController::class, 'index']);
// Route::get('members/create', [MemberController::class, 'create']);
// Route::get('members/{id}', [MemberController::class, 'show']);
// Route::post('members', [MemberController::class, 'store']);
// Route::get('members/{id}/edit', [MemberController::class, 'edit']);
// Route::put('members/{id}', [MemberController::class, 'update']);
// Route::delete('members/{id}', [MemberController::class, 'destroy']);

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

//rutas -> plural
//tablas -> plural
//controladores y modelos -> singular
