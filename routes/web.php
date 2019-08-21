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
Route::get('/register_doctor', 'DoctorController@register_form');
Route::post('/register_doctor', 'DoctorController@register');
Route::get('/doctors', 'DoctorController@showAll');
Route::get('/edit-doctor/{id}', 'DoctorController@edit');
Route::post('/update-doctor', 'DoctorController@update');
Route::get('/delete-doctor/{id}', 'DoctorController@delete');
