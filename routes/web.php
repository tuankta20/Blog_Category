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


route::prefix('blog')->group(function (){
   route::get('/','BlogController@index')->name('blog.index');
   route::get('create','BlogController@create')->name('blog.create');
   route::post('store','BlogController@store')->name('blog.store');
});
