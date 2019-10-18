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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
//route CRUD
Route::get('/','ProductController@index');
Route::get('/product/tambah','ProductController@tambah');
Route::post('/product/save','ProductController@save');
Route::post('/product/update','ProductController@update');
Route::get('/product/edit/{id}','ProductController@edit');
Route::get('/product/detail/{id}','ProductController@detail');
Route::get('/product/hapus/{id}','ProductController@hapus');
