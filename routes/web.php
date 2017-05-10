<?php
Auth::routes();
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
/** PAINEL ADMINISTRATIVO EXCLUSIVO */
Route::group(['prefix' => 'admin', 'middleware' => 'auth.checkrole', 'as' => 'admin.', 'namespace' => 'Admin'], function(){
    Route::get('', ['as' => 'home', 'uses' => 'DashboardController@index']);
    Route::resource('category', 'CategoriesController');
    Route::resource('product', 'ProductsController');
    Route::resource('client', 'ClientsController');

    Route::get('/order', ['as' => 'order.index', 'uses' => 'OrdersController@index']);
    Route::get('/order/{id}/edit', ['as' => 'order.edit', 'uses' => 'OrdersController@edit']);
    Route::put('/order/{id}', ['as' => 'order.update', 'uses' => 'OrdersController@update']);
});
