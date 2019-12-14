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
Route::get('/donation/{id}', 'HomeController@singleDonation');
Route::get('/faq', 'HomeController@faq');

Auth::routes();


Route::namespace('Account')->group(function () {
    Route::get('/account', 'HomeController@index')->name('account.home');
    Route::get('/chat', 'ChatsController@index');
    Route::get('messages', 'ChatsController@fetchMessages');
    Route::post('messages', 'ChatsController@sendMessage');
});
