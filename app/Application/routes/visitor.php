<?php

Route::get('/', 'HomeController@index');
Route::get('product/{slug}', 'HomeController@product');
Route::get('category/{id}', 'HomeController@category');
Route::get('news', 'HomeController@news');
Route::get('new/{id}', 'HomeController@new');

Route::get('contact' , 'ContactController@index');
Route::post('contact' , 'ContactController@storeContact');
Route::get('deleteFile/{model}/{id}', 'HomeController@deleteImage');

Auth::routes();


Route::get('page' , 'PageController@index');
Route::get('page/{id}/view' , 'PageController@getById');


