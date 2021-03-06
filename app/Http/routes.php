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

/**
 * 后台路由组
 */
Route::group(['middleware'=>'adminlogin'], function(){
	//后台首页
	Route::get('admin','Admin\IndexController@index');
	Route::get('logout','Admin\LoginController@logout');

	/**
	 * 后台一级导航路由
	 */
	Route::controller('user','Admin\UserController');
	Route::controller('article','Admin\ArticleController');

	
});

/**
 * 登录
 */
Route::get('home/login','Home\LoginController@index');
Route::get('admin/login','Admin\LoginController@index');
Route::post('admin/login','Admin\LoginController@login');

/**
 * 前台路由组
 */
Route::group(['middleware'=>'homelogin'], function(){

});

/**
 * 前台栏目
 */
Route::get('home','Home\IndexController@index');
Route::get('about','Home\AboutController@index');
Route::get('tech','Home\TechController@index');
Route::get('shop','Home\ShopController@index');
Route::get('forum','Home\ForumController@index');