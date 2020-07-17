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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/usuarios','UserController@index')->name('users.index');

Route::get('/usuarios/{id}','UserController@show')
->where('id','[0-9]+')
->name('users.show');


Route::get('/usuarios/nuevo', 'UserController@create')->name('users.nuevo');
Route::post('/usuarios', 'UserController@Store')->name('users.store');

Route::get('/usuarios/{id}/editar', 'UserController@edit')->name('users.editar');
Route::put('/usuarios/{user}', 'UserController@update');

Route::delete('/usuarios/{user}', 'UserController@destroy')->name("users.destroy");




