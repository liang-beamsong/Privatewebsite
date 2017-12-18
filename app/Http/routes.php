<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('home');
});

Route::get('home','Home\IndexController@index');
Route::get('about','Home\IndexController@index');
Route::get('typography','Home\IndexController@index');
Route::get('gallery','Home\IndexController@index');
Route::get('contact','Home\IndexController@index');

/**
 * 后台路由组
 */
Route::group(['middleware'=>'adminlogin'], function(){

});

/**
 * 前台路由组
 */
Route::group(['middleware'=>'homelogin'], function(){

});