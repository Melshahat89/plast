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

#products
Route::get('products/getById/{id}', 'ProductsApi@getById');
Route::get('products/delete/{id}', 'ProductsApi@delete');
Route::post('products/add', 'ProductsApi@add');
Route::post('products/update/{id}', 'ProductsApi@update');
Route::get('products', 'ProductsApi@index');

#categories
Route::get('categories/getById/{id}', 'CategoriesApi@getById');
Route::get('categories/delete/{id}', 'CategoriesApi@delete');
Route::post('categories/add', 'CategoriesApi@add');
Route::post('categories/update/{id}', 'CategoriesApi@update');
Route::get('categories', 'CategoriesApi@index');



#news
Route::get('news/getById/{id}', 'NewsApi@getById');
Route::get('news/delete/{id}', 'NewsApi@delete');
Route::post('news/add', 'NewsApi@add');
Route::post('news/update/{id}', 'NewsApi@update');
Route::get('news', 'NewsApi@index');