<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@About');

Route::get('/mahasiswa', 'MahasiswaController@index');
// Route::get('/students', 'StudentsController@index');
// Route::get('/students/create', 'StudentsController@create');
// Route::get('/students/{id}', 'StudentsController@show');
// Route::post('/students', 'StudentsController@store');
// Route::delete('/students/{id}', "StudentsController@destroy");
// Route::get('/students/{id}/edit', 'StudentsController@edit');
// Route::patch('/students/{id}', 'StudentsController@update');

Route::resource('students', 'StudentsController');
