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
Route::get('/','sazeController@view');
Route::get('about','sazeController@about');
Route::get('personel','sazeController@personel');
Route::get('estekhdam','sazeController@estekhdam');
Route::post('etebar','sazeController@etebar');
Route::get('search','sazeController@search');
Route::post('/searchmeli','sazeController@searchmeli');
Route::get('/sabt/{id}', 'sazeController@sabt')->where('id', '[1-9]+');
Route::post('/virayesh', 'sazeController@virayesh');


//login
Route::get('login','panelController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// login admin
Route::get('/eimanLogin','Auth\AdminLoginController@showLoginForm')->name('eimanLogin');
