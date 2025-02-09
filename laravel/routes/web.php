<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home");
Route::get('/dashboard', 'App\Http\Controllers\HomeController@dashboard')->name("dashboard");
Route::resource('home', HomeController::class);

Route::resource('login', LoginController::class);
Route::resource('register', RegisterController::class);
Route::group(['middleware' => 'auth'], function () {
    //Commont Routes
    Route::post('/uploadfile','App\Http\Controllers\UploadFileController@uploadFile')->name("uploadfile");
    Route::resource('todo', TodoController::class); 
});





