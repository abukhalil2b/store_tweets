<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
	return view('welcome');
});

Route::get('/products', function () {
	return view('products');
})->name('products');

Route::get('/product-details', function () {
	return view('product-details');
})->name('product-details');
