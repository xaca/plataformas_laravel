<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::resource("libro",LibrosController::class);

<<<<<<< HEAD
require __DIR__.'/auth.php';
=======
//https://devdojo.com/guide/laravel/models

Route::resource('/photo',PhotoController::class);
>>>>>>> a401c591e5dd58c810ffba7968c1239a8079b37c
