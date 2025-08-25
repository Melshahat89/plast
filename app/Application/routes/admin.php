<?php
Route::get('/', 'HomeController@index');
Route::get('icons', 'HomeController@icons');
Route::get('docs', 'HomeController@apiDocs');
Route::get('file-manager', 'HomeController@fileManager');
Route::get('theme/open-file', 'Themes\ThemeController@openFile');
Route::get('theme/{theme}', 'Themes\ThemeController@adminPanel');
Route::post('theme/save-file', 'Themes\ThemeController@save');

### commands
Route::get('commands', 'CommandsController@index');
Route::post('command/exe', 'CommandsController@exe');
Route::get('laravel/commands', 'CommandsController@command');
Route::post('command/otherExe', 'CommandsController@otherExe');
Route::post('laravel/haveCommand', 'CommandsController@haveCommand');
Route::get('exportImport', 'CommandsController@exportEmportModels');
Route::post('export', 'CommandsController@export');
Route::post('import', 'CommandsController@import');


### relations
Route::get('relation', 'RelationController@index');
Route::post('relation/exe', 'RelationController@exe');
Route::get('getCols/{model}', 'RelationController@getCols');
Route::post('relation/rollback', 'RelationController@rollback');

#### user control
Route::get('user', 'UserController@index');
Route::get('user/item/{id?}', 'UserController@show');
Route::post('user/item', 'UserController@store');
Route::post('user/item/{id}', 'UserController@update');
Route::get('user/{id}/delete', 'UserController@destroy');
Route::get('user/{id}/view', 'UserController@getById');
Route::get('user/pluck', 'UserController@pluck');


#### translation
Route::get('translation', 'TranslationController@index');
Route::get('translation/readFile/{file}', 'TranslationController@readFile');
Route::post('translation/save', 'TranslationController@save');
Route::get('translation/getAllContent/{file}', 'TranslationController@getAllContent');
Route::post('translation/both/save', 'TranslationController@bothSave');

#### permissions
Route::get('custom-permissions', 'Development\CustomPermissionsController@index');
Route::get('custom-permissions/readFile/{file}', 'Development\CustomPermissionsController@readFile');
Route::post('custom-permissions/save', 'Development\CustomPermissionsController@save');
Route::get('getControllerByType/{type}', 'Development\PermissionController@getControllerByType');
Route::get('getMethodByController/{controller}/{type}', 'Development\PermissionController@getMethodByController');


#### group control
Route::get('group', 'GroupController@index');
Route::get('group/item/{id?}', 'GroupController@show');
Route::post('group/item', 'GroupController@store');
Route::post('group/item/{id}', 'GroupController@update');
Route::get('group/{id}/delete', 'GroupController@destroy');
Route::get('group/{id}/view', 'GroupController@getById');
Route::get('group/pluck', 'GroupController@pluck');

#### role control
Route::get('role', 'RoleController@index');
Route::get('role/item/{id?}', 'RoleController@show');
Route::post('role/item', 'RoleController@store');
Route::post('role/item/{id}', 'RoleController@update');
Route::get('role/{id}/delete', 'RoleController@destroy');
Route::get('role/{id}/view', 'RoleController@getById');
Route::get('role/pluck', 'RoleController@pluck');
#### permission control
Route::get('permission', 'Development\PermissionController@index');
Route::get('permission/item/{id?}', 'Development\PermissionController@show');
Route::post('permission/item', 'Development\PermissionController@store');
Route::post('permission/item/{id}', 'Development\PermissionController@update');
Route::get('permission/{id}/delete', 'Development\PermissionController@destroy');
Route::get('permission/{id}/view', 'Development\PermissionController@getById');
Route::get('permission/pluck', 'PermissionController@pluck');
#### home control
Route::get('home/{pages?}/{limit?}', 'HomeController@index');
#### setting control
Route::get('setting', 'SettingController@index');
Route::get('setting/item/{id?}', 'SettingController@show');
Route::post('setting/item', 'SettingController@store');
Route::post('setting/item/{id}', 'SettingController@update');
Route::get('setting/{id}/delete', 'SettingController@destroy');
Route::get('setting/{id}/view', 'SettingController@getById');
Route::get('setting/pluck', 'SettingController@pluck');
#### menu control
Route::get('menu', 'MenuController@index');
Route::get('menu/item/{id?}', 'MenuController@show');
Route::post('menu/item', 'MenuController@store');
Route::post('menu/item/{id}', 'MenuController@update');
Route::get('menu/{id}/delete', 'MenuController@destroy');
Route::get('menu/{id}/view', 'MenuController@getById');
Route::post('update/menuItem', 'MenuController@menuItem');
Route::post('addNewItemToMenu', 'MenuController@addNewItemToMenu');
Route::get('deleteMenuItem/{id}', 'MenuController@deleteMenuItem');
Route::get('getItemInfo/{id}', 'MenuController@getItemInfo');
Route::post('updateOneMenuItem', 'MenuController@updateOneMenuItem');
Route::get('menu/pluck', 'MenuController@pluck');
#### log control
Route::get('log', 'LogController@index');
Route::get('log/item/{id?}', 'LogController@show');
Route::post('log/item', 'LogController@store');
Route::post('log/item/{id}', 'LogController@update');
Route::get('log/{id}/delete', 'LogController@destroy');
Route::get('log/{id}/view', 'LogController@getById');
Route::get('log/pluck', 'LogController@pluck');
#### contact control
Route::get('contact', 'ContactController@index');
Route::get('contact/item/{id?}', 'ContactController@show');
Route::post('contact/item', 'ContactController@store');
Route::post('contact/item/{id}', 'ContactController@update');
Route::get('contact/{id}/delete', 'ContactController@destroy');
Route::get('contact/{id}/view', 'ContactController@getById');
Route::post('contact/replay/{id}', 'ContactController@replayEmail');
Route::get('contact/pluck', 'ContactController@pluck');

#### page control
Route::get('page', 'PageController@index');
Route::get('page/item/{id?}', 'PageController@show');
Route::post('page/item', 'PageController@store');
Route::post('page/item/{id}', 'PageController@update');
Route::get('page/{id}/delete', 'PageController@destroy');
Route::get('page/{id}/view', 'PageController@getById');
Route::get('page/pluck', 'PageController@pluck');































































































































































































































#### slider control
Route::get('slider' , 'SliderController@index');
Route::get('slider/item/{id?}' , 'SliderController@show');
Route::post('slider/item' , 'SliderController@store');
Route::post('slider/item/{id}' , 'SliderController@update');
Route::get('slider/{id}/delete' , 'SliderController@destroy');
Route::get('slider/{id}/view' , 'SliderController@getById');
Route::get('slider/pluck', 'SliderController@pluck');
#### products control
Route::get('products' , 'ProductsController@index');
Route::get('products/item/{id?}' , 'ProductsController@show');
Route::post('products/item' , 'ProductsController@store');
Route::post('products/item/{id}' , 'ProductsController@update');
Route::get('products/{id}/delete' , 'ProductsController@destroy');
Route::get('products/{id}/view' , 'ProductsController@getById');
Route::get('products/pluck', 'ProductsController@pluck');
#### categories control
Route::get('categories' , 'CategoriesController@index');
Route::get('categories/item/{id?}' , 'CategoriesController@show');
Route::post('categories/item' , 'CategoriesController@store');
Route::post('categories/item/{id}' , 'CategoriesController@update');
Route::get('categories/{id}/delete' , 'CategoriesController@destroy');
Route::get('categories/{id}/view' , 'CategoriesController@getById');
Route::get('categories/pluck', 'CategoriesController@pluck');

#### news control
Route::get('news' , 'NewsController@index');
Route::get('news/item/{id?}' , 'NewsController@show');
Route::post('news/item' , 'NewsController@store');
Route::post('news/item/{id}' , 'NewsController@update');
Route::get('news/{id}/delete' , 'NewsController@destroy');
Route::get('news/{id}/view' , 'NewsController@getById');
Route::get('news/pluck', 'NewsController@pluck');