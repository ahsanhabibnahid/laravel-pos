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



Route::get('/groups', 'UserGroupsController@index');
Route::get('/groups/create', 'UserGroupsController@create');
Route::post('/groups', 'UserGroupsController@store');
Route::post('/groups/{id}', 'UserGroupsController@destroy');


Route::resource('/users', 'UsersController');

// Route::get('/users/{id}', 'UserController@show');
// Route::get('/users/create', 'UserController@show');
// Route::post('/users', 'UserController@store');
// Route::get('/users/{id}/edit', 'UserController@edit');
// Route::put('/users/{id}', 'UserController@update');
// Route::delete('/users/{id}', 'UserController@delete');


