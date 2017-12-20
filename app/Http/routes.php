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
Route::get('about','Home\AboutController@index');
Route::get('tech','Home\TechController@index');
Route::get('shop','Home\ShopController@index');
Route::get('forum','Home\ForumController@index');

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