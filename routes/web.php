<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\ProductController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\SalesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Route::get('/', [HomeController::class, 'index']);

// Product Routes (Prefix Category)
// oute::prefix('category')->group(function () {
//     Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
//     Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
//     Route::get('/home-care', [ProductController::class, 'homeCare']);
//     Route::get('/baby-kid', [ProductController::class, 'babyKid']);
// });

// // User Route (Parameter)
// Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

// // Sales Page
// Route::get('/sales', [SalesController::class, 'index']);R


// use App\Http\Controllers\LevelController;
// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/level', [LevelController::class, 'index']);

// use App\Http\Controllers\KategoriController;
// use App\Http\Controllers\LevelController;
// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/level', [LevelController::class, 'index']);
// Route::get('/kategori', [KategoriController::class, 'index']);


use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'tambah'])->name('user.tambah');
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('user.simpan');
Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('user.ubah');
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('user.hapus');