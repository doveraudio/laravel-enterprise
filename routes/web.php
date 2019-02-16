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
Route::get('/tinker', function () {
    return view('tinker');
})->middleware('permission:administration,access')->name('tinker');
Route::get('/admin', function () {
    return view('admin');
})->middleware('permission:administration,access')->name('admin');
Route::get('/profiledata', 'UserController@default')->name('profiledata');
Route::get('/users/all', 'UserController@index')->name('users/all');
Route::get('/user', function () {
    return view('user');
})->middleware('permission:user,access')->name('user');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/execute', 'TinkerController@execute')->name('execute');