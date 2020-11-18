<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false]);

Route::get('/', 'WelcomeController@index');
Route::post('search', 'WelcomeController@search')->name('search');

Route::get('home', 'HomeController@home')->name('home');

Route::get('twitte/create', 'TwitteController@create')->name('twitte.create');
Route::post('twitte/store', 'TwitteController@store')->name('twitte.store');

Route::get('replay/{twitte_id}/create', 'ReplayController@create')->name('replay.create');
Route::post('replay/store', 'ReplayController@store')->name('replay.store');
