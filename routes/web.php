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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/monitores', 'MonitoresController@index')->name('monitores.index');
// Route::get('/monitores/create', 'MonitoresController@create')->name('monitores.create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=> 'admin'], function(){
    Route::get('/settings', 'AdminController@index')->name('admin');

});

Route::group(['prefix' => 'monitores'], function(){
    Route::get('/', 'MonitoresController@index')->name('monitores.index');
    Route::get('/criar', 'MonitoresController@create')->name('monitores.create');
    Route::post('/criar', 'MonitoresController@store')->name('monitores.store');
    Route::get('/deletar/{id}', 'MonitoresController@destroy')->name('monitores.destroy');
    Route::get('/editar/{id}', 'MonitoresController@edit')->name('monitores.edit');
    Route::put('/update/{id}', 'MonitoresController@update')->name('monitores.update');

});