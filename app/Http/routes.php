<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/admin/menu', 'MenusController@index');
/*admin
Route::get('/admin/menu', 'Admin\MenusController@index');
Route::get('/admin/menu/create', 'Admin\MenusController@create');
Route::get('/admin/menu/{id}', 'Admin\MenusController@show');

Route::post('/admin/menu', 'Admin\MenusController@store'); */

Route::get('/admin/menu/create', 'Admin\MenusController@create');
Route::resource('/admin/menu','Admin\MenusController');




