<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user/list','UserController@show');
Route::post('/user/create','Auth\RegisterController@register');
Route::post('/user/delete','UserController@delete');

Route::get('/form/result', 'FormController@show');

Route::post('/form/purchase','FormController@purchase');
Route::post('/form/validate','FormController@validateEmail');

Route::post('/user/send-invitation','Auth\RegisterController@invite');

//Route::post('/register','Auth\RegisterController@register');
//Route::post('/register/validate','Auth\RegisterController@validateEmail');
//Route::post('/user/profile/update','UserController@update');
//Route::post('/user/password/update','PasswordController@update');

//Route::post('/login','Auth\LoginController@login');
//Route::post('/logout','Auth\LoginController@logout');
//Route::post('/token/refresh','Auth\LoginController@refresh');