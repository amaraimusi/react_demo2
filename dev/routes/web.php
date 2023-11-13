<?php

use Illuminate\Support\Facades\Route;

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


Route::get('demo', 'App\Http\Controllers\DemoController@index');
Route::post('demo/spa_demo', 'App\Http\Controllers\DemoController@spa_demo');

Route::get('richmenu', 'App\Http\Controllers\RichmenuController@index');
Route::post('richmenu/spa_demo', 'App\Http\Controllers\RichmenuController@spa_demo');
Route::post('richmenu/get_list_spa', 'App\Http\Controllers\RichmenuController@get_list_spa');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
