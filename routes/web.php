<?php

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
Route::get('/list', 'ClientsController@list');
Route::post('/list', 'ClientsController@store');
Route::get('{id}/edit', 'ClientsController@edit')->name('edit');
Route::post('edit/{id}', 'ClientsController@update');
Route::get('edit/{id}', 'ClientsController@delete');

// Route::post('edit', 'edit');