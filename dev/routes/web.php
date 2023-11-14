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

Route::get('rich_menu', 'App\Http\Controllers\RichMenuController@index');
Route::post('rich_menu/spa_demo', 'App\Http\Controllers\RichMenuController@spa_demo');
Route::post('rich_menu/get_list_spa', 'App\Http\Controllers\RichMenuController@get_list_spa');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
