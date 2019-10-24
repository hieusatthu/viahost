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


Route::group([ 'namespace' => 'User' ], function () {

    Route::get('/','UserController@getLogin')->name('get-login');
    Route::post('/post-login','UserController@postLogin')->name('post-login');

});

Route::group([ 'namespace' => 'Admin' ], function () {

   Route::get('/admin','AdminController@showDashboard')->name('admin');

   Route::get('/getvia','AdminController@getVia')->name('getvia');

   Route::get('/deletevia','AdminController@deleteVia')->name('deletevia');
});

