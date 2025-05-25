<?php

use app\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Rutas propias
Route::get('/', [HomeController::class, 'getHome']);
Route::get('/login-custom', [AuthController::class, 'getLogin']); //Cuidado: Breeze ya usa /login
Route::get('/logout-custom', [AuthController::class, 'getLogout']); //Cuidado: Breeze también maneja logout

Route::get('/category', [CategoryController::class, 'getIndex']);
Route::get('/category/create', [CategoryController::class, 'getCreate']);
Route::get('/category/show/{id}', [CategoryController::class, 'getShow']);
Route::get('/category/edit/{id}', [CategoryController::class, 'getEdit']);

//Rutas agregadas por Breeze
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

require __DIR__.'/auth.php'; //Rutas de autenticación generadas por Breeze (login, register, etc.)
