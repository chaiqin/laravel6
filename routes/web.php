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

//登录注册
Route::get('/login', "Auth\LoginController@getLoginForm");
Route::post('/login', "Auth\LoginController@login");
Route::get('/logout', "Auth\LoginController@logout");

//需认证路由
Route::group(['middleware' => 'auth'],function (){
    Route::get('/', "HomeController@index");
    Route::get('/home', "HomeController@index");
});

