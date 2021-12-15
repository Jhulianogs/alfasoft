<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', "ContactController@index")->name('index');
Route::get('/create', "ContactController@create")->name('create');
Route::post('/store', "ContactController@store")->name('store');
Route::get('/edit/{contact}', "ContactController@edit")->name('edit');
Route::put('/update/{contact}', "ContactController@update")->name('update');

Route::get('/show/{contact}', "ContactController@show")->name('show');
Route::delete('/delete/{contact}', "ContactController@destroy")->name('delete');
