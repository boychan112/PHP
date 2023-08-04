<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', 'App\Http\Controllers\TodoController@index');
Route::get('/create', 'App\Http\Controllers\TodoController@create');
Route::get('/details/{id}', 'App\Http\Controllers\TodoController@details');
Route::post('store-data', 'App\Http\Controllers\TodoController@store');
Route::get('edit/{id}', 'App\Http\Controllers\TodoController@edit');
Route::post('update/{todo}', 'App\Http\Controllers\TodoController@update');
Route::get('delete/{todo}', 'App\Http\Controllers\TodoController@delete');