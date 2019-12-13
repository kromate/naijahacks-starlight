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

Route::get('/', 'HomeController@index');
Route::get('/donation', 'HomeController@donations');
Route::get('/faq', 'HomeController@faq');

Auth::routes();

Route::namespace('Account')->group(function () {
    Route::get('/account', 'HomeController@index')->name('account.home');
});
