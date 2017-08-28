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
// show patients list
Route::get('/patients', 'patientsController@index');
// Route::get('/patients/show', 'patientsController@index');
// show patients details based on the id
Route::get('/patients/show/{id}', 'patientsController@show');
// form to add a new patient
Route::get('/patients/create', 'patientsController@create');
//post the patients deetails to the database and return to patients
Route::post('/patients', 'patientsController@store');
// show the form to edit the patients info acording to the id
Route::get('/patients/edit/{id}', 'patientsController@edit');
// post the patients info to the database acording to the id
Route::post('/patients/edit/{id}', 'patientsController@update');
//delete the patinets info based on the ID
Route::post('/patients/{id}', 'patientsController@destroy');



