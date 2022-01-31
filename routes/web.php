<?php

use Illuminate\Support\Facades\Route;
Route::get('/', 'HomeController@home') -> name ('home');

Route::get('/details/show/{id}', 'HomeController@show') -> name ('show');

Route::get('/create', 'HomeController@create') -> name ('create');
Route::post('/store', 'HomeController@store') -> name('store');

Route::get('/update/{id}', 'HomeController@update') -> name ('update');
Route::post('/updated/{id}', 'HomeController@updated') -> name ('updated');

Route::get('/delete/{id}', 'HomeController@delete') -> name ('delete');