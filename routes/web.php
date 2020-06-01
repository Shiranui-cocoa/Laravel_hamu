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
    return view('hamu');
});

Route::get('/hello' , 'HelloController@index');

//ここからハムスターページ
Route::get('/hamu_test' , 'hamuController@index_hamu');
//ジャンガリアン

Route::get('/hamu_test2', 'hamuController@index_hamu_2');
//キャンベル