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

//login
Route::get('login','panelController@login');
