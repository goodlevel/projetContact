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

Route::get('/','contactController@allContact');
Route::get('/addcontact','contactController@addContact');
Route::post('/saveContact','contactController@saveContact');
Route::get('/deleteContact/{id}','contactController@deleteContact');
Route::post('/updateContact','contactController@updateContact');
Route::get('/detailContact/{id}','contactController@detailContact');

