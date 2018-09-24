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
})->name('index');

Route::get('/first', [
    'uses'=>'QuoteController@createQuote',
    'as'=>'createquote'
]);

Route::get('/first', [
    'uses'=>'QuoteController@createQuote',
    'as'=>'createquote'
]);

Route::get('/admin/login', [
    'uses'=>'AdminController@getLogin',
    'as'=>'admin.login'
]);

Route::post('/admin/login', [
    'uses'=>'AdminController@postLogin',
    'as'=>'admin.login'
]);
Route::get('/admin/dashboard', [
    'uses'=>'AdminController@getDashboard',
    'middleware'=>'auth',
    'as'=>'admin.dashboard'
]);

Route::get('/admin/quotes', function(){
    return view('admin.quotes');
})->middleware('auth');

Route::get('/admin/logout', [
    'uses'=>'AdminController@getLogout',
    'as'=>'admin.logout'
]);