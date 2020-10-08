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
Route::post('/directorio', 'DirectorioController@index')->name('directorio');

Route::get('/restaurant/create', 'RestaurantController@create')->name('restaurant.create');
Route::post('/restaurant/store', 'RestaurantController@store')->name('restaurant.store');
Route::get('/restaurant/show/{id}', 'RestaurantController@show')->name('restaurant.show');
