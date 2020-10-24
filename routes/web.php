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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/directorio', 'DirectorioController@index')->name('directorio');

Route::get('/restaurant/create', 'RestaurantController@create')->name('restaurant.create');
Route::post('/restaurant/store', 'RestaurantController@store')->name('restaurant.store');
Route::get('/restaurant/show/{id}', 'RestaurantController@show')->name('restaurant.show');
Route::get('/restaurant/edit/{id}', 'RestaurantController@edit')->name('restaurant.edit');
Route::post('/restaurant/update/{id}', 'RestaurantController@update')->name('restaurant.update');
Route::post('/restaurant/destroy/{id}', 'RestaurantController@destroy')->name('restaurant.destroy');

