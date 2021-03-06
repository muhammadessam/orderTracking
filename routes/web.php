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
Route::resource('companies', 'CompanyController')->middleware('auth');
Route::get('/companies/{company}/order', 'OrderController@create')->name('createOrder')->middleware('auth');
Route::post('/companies/{company}/order', 'OrderController@store')->name('storeOrder')->middleware('auth');
Route::get('/companies/{company}/tags', 'CompanyController@addTags')->name('createTag')->middleware('auth');
Route::post('/companies/{company}/{tag}', 'CompanyController@storeTag')->name('storeTag')->middleware('auth');
