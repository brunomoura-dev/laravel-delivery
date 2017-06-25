<?php
Auth::routes();
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
/** PAINEL ADMINISTRATIVO EXCLUSIVO */
Route::group(['prefix' => 'admin', 'middleware' => 'auth.checkrole:admin', 'as' => 'admin.', 'namespace' => 'Admin'], function(){
    Route::get('', ['as' => 'home', 'uses' => 'DashboardController@index']);

    Route::resource('category', 'CategoriesController');
    Route::resource('product', 'ProductsController');
    Route::resource('client', 'ClientsController');
    Route::resource('cupom', 'CupomController');

    Route::get('order', ['as' => 'order.index', 'uses' => 'OrdersController@index']);
    Route::get('order/{id}/edit', ['as' => 'order.edit', 'uses' => 'OrdersController@edit']);
    Route::put('order/{id}', ['as' => 'order.update', 'uses' => 'OrdersController@update']);
});

Route::group(['prefix' => 'customer', 'as' => 'customer.', 'middleware' => 'auth.checkrole:client',], function(){
    Route::get('order', ['as' => 'order.index', 'uses' => 'CheckoutController@index']);
    Route::get('order/create', ['as' => 'order.create', 'uses' => 'CheckoutController@create']);
    Route::post('order/store', ['as' => 'order.store', 'uses' => 'CheckoutController@store']);
});