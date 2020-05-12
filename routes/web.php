<?php

use Illuminate\Support\Facades\Route;

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

//ユーザホーム
Route::get('/', 'UserHomeController@index');

//todoホーム
Route::get('/content/index', 'ContentController@index');

//todo新規作成
Route::get('/content/new', 'ContentController@new');
//バリデーション 一旦迂回、未チェックで保存する
//Route::post('/content/check', 'ContentController@check');

Route::post('/content/create', 'ContentController@create');