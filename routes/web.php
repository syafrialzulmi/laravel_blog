<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\OngkirController;

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

Route::get('/user', [UserController::class, 'index']);

Route::resource('dosen', DosenController::class);
// Route::resource('ongkir', OngkirController::class);

Route::get('/ongkir/province', [OngkirController::class, 'province']);
Route::get('/ongkir/city/{id}', [OngkirController::class, 'city']);

Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);

// Route::get('/dosen', [DosenController::class, 'index']);
// Route::get('/dosen/create', [DosenController::class, 'create']);
// Route::post('/dosen', [DosenController::class, 'store']);
// Route::get('/dosen/{id}/edit', [DosenController::class, 'edit']);
// Route::put('/dosen/{id}', [DosenController::class, 'update']);
// Route::delete('/dosen/{id}', [DosenController::class, 'delete']);

Route::get('template', function() {
    return view('template');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
