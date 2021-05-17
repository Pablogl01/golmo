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

/*Route::resource([
    'carmodel'=>'CarModelController',
    'user'=>'UserController',
    'home'=>'HomeController'
    ]);*/

Route::resource('carmodel','App\Http\Controllers\CarModelController');
Route::resource('user','App\Http\Controllers\UserController');
Route::resource('home','App\Http\Controllers\HomeController');

Route::get('/', function () {
    return view('welcome');
});

Route::put('post/{id}', function ($id) {
    //
})->middleware('auth', 'role:admin');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login2', [App\Http\Controllers\UserController::class, 'login2'])->name('login2');
Route::get('/info/{id}', [App\Http\Controllers\CarModelController::class, 'index'])->name('info')->middleware('auth');
Route::get('/perso', [App\Http\Controllers\PersonalizationController::class, 'index'])->name('perso')->middleware('auth');
Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile')->middleware('auth');
Route::get('/gestionusers', [App\Http\Controllers\UserController::class, 'gestionusers'])->name('gestionusers')->middleware('auth', 'role:admin');
Route::get('/gestionmodelos', [App\Http\Controllers\CarModelController::class, 'gestionmodelos'])->name('gestionmodelos')->middleware('auth', 'role:admin');
Route::get('/gestionofertas', [App\Http\Controllers\OfertasController::class, 'gestionofertas'])->name('gestionofertas')->middleware('auth', 'role:admin');
Route::get('/gestionvariantes', [App\Http\Controllers\VarianteController::class, 'gestionvariantes'])->name('gestionvariantes')->middleware('auth', 'role:admin');
Route::get('/subirmodelo', [App\Http\Controllers\CarModelController::class, 'subirmodelo'])->name('subirmodelo')->middleware('auth', 'role:admin');
Route::get('/subirvariante', [App\Http\Controllers\VarianteController::class, 'subirvariante'])->name('subirvariante')->middleware('auth', 'role:admin');
Route::get('/editarmodelo/{id}', [App\Http\Controllers\CarModelController::class, 'editarmodelo'])->name('editarmodelo')->middleware('auth', 'role:admin');
Route::get('/borrarmodelo/{id}', [App\Http\Controllers\CarModelController::class, 'borrarmodelo'])->name('borrarmodelo')->middleware('auth', 'role:admin');
Route::post('/nuevomodelo', [App\Http\Controllers\CarModelController::class, 'nuevomodelo'])->name('nuevomodelo')->middleware('auth', 'role:admin');
Route::post('/nuevavariante', [App\Http\Controllers\VarianteController::class, 'nuevavariante'])->name('nuevavariante')->middleware('auth', 'role:admin');
Route::post('/nuevaimagen', [App\Http\Controllers\ImagenesController::class, 'nuevaimagen'])->name('nuevaimagen')->middleware('auth', 'role:admin');