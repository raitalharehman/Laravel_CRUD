<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','CrudController@index');
Route::resource('user','UserController');
Route::resource('product','CrudController');
Route::resource('shop','ShopController');


Route::resource('create','CrudController@view');
Route::resource('create','ShopController@view');
Route::get('product/destroy/{id}','CrudController@destroy');
Route::get('user/destroy/{id}','UserController@destroy');
Route::get('shop/destroy/{id}','ShopController@destroy');

//Route::get("/edit/{id}" , 'CrudController@edit');
//Route::put("/update/{id}" , 'CrudController@update');

Route::get('/Admin','AdminController@index');

Route::get("/logout",function(){

    session()->flush("user");
    return redirect("/login");

});

Auth::routes();

Route::get('/home', 'HomeController@index');
