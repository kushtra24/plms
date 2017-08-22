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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/patients', 'patientsController@index');
Route::get('/patients/show', 'patientsController@index');
Route::get('/patients/create', 'patientsController@create');
Route::post('/patients', 'patientsController@store');
Route::get('/patients/edit/{id}', 'patientsController@edit');
Route::post('/patients/edit/{id}', 'patientsController@update');
Route::get('/patients/show/{id}', 'patientsController@show');
Route::post('/patients/{id}', 'patientsController@destroy');



