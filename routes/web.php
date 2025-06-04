<?php

use app\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
//use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;

//Rutas propias
Route::get('/', HomeController::class); //Usa el método __invoke automáticamente

//Route::get('/register', [RegisterController::class]);
//Route::get('/login-custom', [AuthController::class, 'getLogin']); //Cuidado: Breeze ya usa /login
//Route::post('/logout-custom', [AuthController::class, 'getLogout']); //Cuidado: Breeze también maneja logout

Route::get('/category', [CategoryController::class, 'getIndex']);
Route::get('/category/create', [CategoryController::class, 'getCreate']);
Route::get('/category/show/{id}', [CategoryController::class, 'getShow']);
Route::get('/category/edit/{id}', [CategoryController::class, 'getEdit']);

Route::get('/post', [PostController::class, 'getIndex']);
Route::get('/post/create', [PostController::class, 'getCreate']);
Route::get('/post/show/{id}', [PostController::class, 'getShow']);
Route::get('/post/edit/{id}', [PostController::class, 'getEdit']);

Route::get('/favorites', FavoritesController::class);

Route::post('/register', [RegisteredUserController::class, 'store']);

//Solo usuarios logueados pueden acceder a esta ruta
Route::middleware(['auth'])->group(function () {
    Route::get('/category/userCategories', [CategoryController::class, 'getUserCategories'])->name('user.categories');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/post/userPosts', [PostController::class, 'getUserPosts'])->name('user.posts');
});

Route::post('/category/store', [CategoryController::class, 'store']);
Route::put('/category/update/{id}', [CategoryController::class, 'update']);
Route::delete('/category/destroy/{id}', [CategoryController::class, 'destroy']);

Route::post('/post/store', [PostController::class, 'store']);
Route::put('/post/update/{id}', [PostController::class, 'update']);
Route::delete('/post/destroy/{id}', [PostController::class, 'destroy']);


//Rutas agregadas por Breeze
/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/show', [ProfileController::class, 'show'])->name('profile.show');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php'; //Rutas de autenticación generadas por Breeze (login, register, etc.)
