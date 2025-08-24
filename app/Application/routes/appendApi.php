<?php

#user
Route::post('users/login', 'UserApi@login');
Route::get('users/getById/{id}', 'UserApi@getById');
Route::get('users/delete/{id}', 'UserApi@delete');
Route::post('users/add', 'UserApi@add');
Route::post('users/update', 'UserApi@update');
Route::get('users', 'UserApi@index');
Route::get('users/getUserByToken', 'UserApi@getUserByToken');

#page
Route::get('page/getById/{id}', 'PageApi@getById');
Route::get('page/delete/{id}', 'PageApi@delete');
Route::post('page/add', 'PageApi@add');
Route::post('page/update/{id}', 'PageApi@update');
Route::get('page', 'PageApi@index');






#slider
Route::get('slider/getById/{id}', 'SliderApi@getById');
Route::get('slider/delete/{id}', 'SliderApi@delete');
Route::post('slider/add', 'SliderApi@add');
Route::post('slider/update/{id}', 'SliderApi@update');
Route::get('slider', 'SliderApi@index');