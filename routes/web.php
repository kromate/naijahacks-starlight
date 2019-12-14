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


Route::namespace('Account')->prefix('account')->name('account.')->group(function () {

    Route::get('/', 'HomeController@index')->name('home');

    Route::get('chat', 'ChatsController@index')->name('chat');
    Route::get('messages', 'ChatsController@fetchMessages')->name('messages');
    Route::post('messages', 'ChatsController@sendMessage')->name('messages.send');

    Route::resource('donations', 'DonationsController', ['except' => ['show']]);
    Route::resource('transactions', 'TransactionsController', ['except' => ['show']]);
});
