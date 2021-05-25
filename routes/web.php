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
    return view('auth/login');
});

Route::put('post/{id}', function ($id) {
    //
})->middleware('auth', 'role:admin');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/info/{id}', [App\Http\Controllers\CarModelController::class, 'index'])->name('info')->middleware('auth');
Route::get('/perso/{id}', [App\Http\Controllers\PersonalizationController::class, 'index'])->name('perso')->middleware('auth');
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
Route::post('/nuevaimagen/{gamaid}', [App\Http\Controllers\ImagenesController::class, 'nuevaimagen'])->name('nuevaimagen')->middleware('auth', 'role:admin');
Route::post('/previsualizar/{id}', [App\Http\Controllers\UserModelController::class, 'previsualizar'])->name('previsualizar')->middleware('auth');
Route::post('/guardarperso/{model_id}', [App\Http\Controllers\UserModelController::class, 'guardarperso'])->name('guardarperso')->middleware('auth');
Route::get('/eliminarvariante/{id}', [App\Http\Controllers\VarianteController::class, 'eliminarvariante'])->name('eliminarvariante')->middleware('auth','role:admin');
Route::get('/edituser/{id}', [App\Http\Controllers\UserController::class, 'edituser'])->name('edituser')->middleware('auth','role:admin');
Route::get('/borraruser/{id}', [App\Http\Controllers\UserController::class, 'borraruser'])->name('borraruser')->middleware('auth','role:admin');
Route::post('/saveedituser', [App\Http\Controllers\UserController::class, 'saveedituser'])->name('saveedituser')->middleware('auth','role:admin');
Route::get('/editarimagen/{id}', [App\Http\Controllers\ImagenesController::class, 'editarimagen'])->name('editarimagen')->middleware('auth','role:admin');
Route::post('/updateimagen/{imagen}', [App\Http\Controllers\ImagenesController::class, 'updateimagen'])->name('updateimagen')->middleware('auth','role:admin');
Route::post('/updatemodelinfo/{model}', [App\Http\Controllers\CarModelController::class, 'updatemodelinfo'])->name('updatemodelinfo')->middleware('auth','role:admin');
Route::get('/seguridad', [App\Http\Controllers\UserController::class, 'seguridad'])->name('seguridad')->middleware('auth');
Route::get('/miscoches', [App\Http\Controllers\UserModelController::class, 'miscoches'])->name('miscoches')->middleware('auth');
Route::get('/misofertas', [App\Http\Controllers\OfertasController::class, 'misofertas'])->name('misofertas')->middleware('auth');
Route::get('/privacidad', [App\Http\Controllers\UserController::class, 'privacidad'])->name('privacidad')->middleware('auth');
Route::get('/realizaroferta', [App\Http\Controllers\OfertasController::class, 'realizaroferta'])->name('realizaroferta')->middleware('auth');
Route::post('/nuevaoferta', [App\Http\Controllers\OfertasController::class, 'nuevaoferta'])->name('nuevaoferta')->middleware('auth');
Route::get('/veroferta/{oferta}', [App\Http\Controllers\OfertasController::class, 'veroferta'])->name('veroferta')->middleware('auth');
Route::get('/borrarmicuenta', [App\Http\Controllers\UserController::class, 'borrarmicuenta'])->name('borrarmicuenta')->middleware('auth');



