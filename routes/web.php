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

Route::get('/', 'GuestController@index')->name('index');
Route::get('comics/{comic}', 'GuestController@show')->name('guest.show');

Auth::routes();

Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::resource('comics', 'ComicController');
    Route::resource('musts', 'MustController');
    Route::get('/series', 'SerieController@index')->name('series.index');
    Route::get('/series/create', 'SerieController@create')->name('series.create');
    Route::get('/series/{serie}', 'SerieController@show')->name('series.show');
    Route::post('/series', 'SerieController@store')->name('series.store');
    Route::get('/series/{serie}/edit', 'SerieController@edit')->name('series.edit');
    Route::patch('/series/{serie}', 'SerieController@update')->name('series.update');
    Route::put('/series/{serie}', 'SerieController@update')->name('series.update');
    Route::delete('/series/{serie}', 'SerieController@destroy')->name('series.destroy');
});
