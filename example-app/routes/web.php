<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\recordatoriosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\notasControler;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource("/notas", notasControler::class)->middleware('auth');
Route::get('/notas', [notasControler::class, 'index'])->name('notas.index')->middleware('auth');;

Route::resource("/recordatorios", recordatoriosController::class)->middleware('auth');
Route::get('/recordatorios', [recordatoriosController::class, 'index'])->name('recordatorios.index')->middleware('auth');;

require __DIR__.'/auth.php';
