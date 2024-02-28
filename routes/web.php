<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreinscritoController;
use App\Http\Controllers\InscritoController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/registro', function () {return view('formulario.index');});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('preinscritos', PreinscritoController::class);
Route::resource('inscritos', InscritoController::class);

Route::get('/inscribir/{preinscrito}', [PreinscritoController::class, 'inscribir'])->name('inscribir');
Route::get('/desinscribir/{preinscrito}', [InscritoController::class, 'desinscribir'])->name('desinscribir');


require __DIR__.'/auth.php';
