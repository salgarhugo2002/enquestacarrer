<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EnquestadorsController;
use App\Http\Controllers\EnquestesController;
use App\Http\Controllers\OpcionsController;
use App\Http\Controllers\TipusPreguntaController;
use App\Http\Controllers\PreguntasController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/register', function () {
    return view('auth.register');
});
Route::post('/register', [RegisterController::class, 'register']);


Route::get('/login', function () {
    return view('auth.login');
})->name('login.login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/logout', [LogoutController::class, 'logout']);

Route::controller(EnquestadorsController::class)->group(function () {
    Route::get('/enquestadors', 'index')->name('enquestadors.index');;
    Route::get('/enquestadors/create', 'create');
    Route::post('/enquestadors', 'store');
    Route::get('/enquestadors/{id}', 'show');
    Route::get('/enquestadors/{id}/edit', 'edit')->name('enquestadors.edit');
    Route::put('/enquestadors/{id}', 'update');
    Route::delete('/enquestadors/{id}/delete', 'delete')->name('enquestadors.delete');
});

Route::controller(EnquestesController::class)->group(function () {
    Route::get('/enquestas', 'index')->name('enquestas.index');
    Route::get('/enquestas/create', 'create');
    Route::post('/enquestas', 'store');
    Route::get('/enquestas/{id}', 'show');
    Route::get('/enquestas/{id}/edit', 'edit')->name('enquestas.edit');
    Route::put('/enquestas/{id}', 'update');
    Route::delete('/enquestas/{id}', 'delete')->name('enquestas.delete');
});

Route::controller(OpcionsController::class)->group(function () {
    Route::get('/opcions', 'index');
    Route::get('/opcions/create', 'create');
    Route::post('/opcions', 'store');
    Route::get('/opcions/{id}', 'show');
    Route::get('/opcions/{id}/edit', 'edit');
    Route::put('/opcions/{id}', 'update');
    Route::delete('/opcions/{id}', 'delete');
});

Route::controller(TipusPreguntaController::class)->group(function () {
    Route::get('/tipuspregunta', 'index');
    Route::get('/tipuspregunta/create', 'create');
    Route::post('/tipuspregunta', 'store');
    Route::get('/tipuspregunta/{id}', 'show');
    Route::get('/tipuspregunta/{id}/edit', 'edit');
    Route::put('/tipuspregunta/{id}', 'update');
    Route::delete('/tipuspregunta/{id}', 'delete');
});
Route::controller(PreguntasController::class)->group(function () {
    Route::get('/preguntas', 'index');
    Route::get('/preguntas/create', 'create');
    Route::post('/preguntas', 'store');
    Route::get('/preguntas/{id}', 'show');
    Route::get('/preguntas/{id}/edit', 'edit');
    Route::put('/preguntas/{id}', 'update');
    Route::delete('/preguntas/{id}', 'delete');
});