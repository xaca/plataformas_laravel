<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

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

//https://es.stackoverflow.com/questions/283568/error-500-internal-server-error-laravel

//https://stackoverflow.com/questions/64130722/serializableclosure-error-in-laravel-your-serialized-closure-might-have-been-m

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',function(){
    return view('index');
});

//https://devdojo.com/guide/laravel/models

Route::resource('/photo',PhotoController::class);