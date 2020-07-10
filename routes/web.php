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
    // return app()->getLocale();
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('home', 'HomeController@index')->name('home');
Route::get('library/book/index', 'LibraryController@bookIndex')->name('library.book.index');
Route::get('library/book/create', 'LibraryController@bookCreate')->name('library.book.create');
Route::post('library/book/store', 'LibraryController@bookStore')->name('library.book.store');
Route::post('library/book/update', 'LibraryController@bookUpdate')->name('library.book.update');

Route::get('library/cate/create', 'LibraryController@cateCreate')->name('library.cate.create');
Route::post('library/cate/store', 'LibraryController@cateStore')->name('library.cate.store');
Route::post('library/cate/update', 'LibraryController@cateUpdate')->name('library.cate.update');
