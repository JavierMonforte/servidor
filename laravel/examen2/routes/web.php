<?php

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
Route::get('/home', function () {
    return 'welcome';
});
Route::resource ('activities', ActivityController::class)->middleware('auth');;
// Route::get('activities', [ActivityController::class, 'index']);
// Route::get('activities/create', [ActivityController::class, 'create']);
// Route::get('activities/{id}', [ActivityController::class, 'show']);
// Route::post('activities', [ActivityController::class, 'store']);
// Route::get('activities/{id}/edit', [ActivityController::class, 'edit']);
// Route::put('activities/{id}', [ActivityController::class, 'update']);
// Route::delete('activities/{id}', [ActivityController::class, 'destroy']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
