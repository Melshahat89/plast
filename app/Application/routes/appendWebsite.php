<?php

Route::get('page/item/{id?}', 'PageController@show');
Route::post('page/item', 'PageController@store');
Route::post('page/item/{id}', 'PageController@update');
Route::get('page/{id}/delete', 'PageController@destroy');












#### slider control
//Route::get('slider' , 'SliderController@index');
//Route::get('slider/item/{id?}' , 'SliderController@show');
//Route::post('slider/item' , 'SliderController@store');
//Route::post('slider/item/{id}' , 'SliderController@update');
//Route::get('slider/{id}/delete' , 'SliderController@destroy');
//Route::get('slider/{id}/view' , 'SliderController@getById');
//
//#### products control
//Route::get('products' , 'ProductsController@index');
//Route::get('products/item/{id?}' , 'ProductsController@show');
//Route::post('products/item' , 'ProductsController@store');
//Route::post('products/item/{id}' , 'ProductsController@update');
//Route::get('products/{id}/delete' , 'ProductsController@destroy');
//Route::get('products/{id}/view' , 'ProductsController@getById');
//
//#### categories control
//Route::get('categories' , 'CategoriesController@index');
//Route::get('categories/item/{id?}' , 'CategoriesController@show');
//Route::post('categories/item' , 'CategoriesController@store');
//Route::post('categories/item/{id}' , 'CategoriesController@update');
//Route::get('categories/{id}/delete' , 'CategoriesController@destroy');
//Route::get('categories/{id}/view' , 'CategoriesController@getById');



#### news control
//Route::get('news' , 'NewsController@index');
//Route::get('news/item/{id?}' , 'NewsController@show');
//Route::post('news/item' , 'NewsController@store');
//Route::post('news/item/{id}' , 'NewsController@update');
//Route::get('news/{id}/delete' , 'NewsController@destroy');
//Route::get('news/{id}/view' , 'NewsController@getById');