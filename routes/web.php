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

    Route::get('/cupom', ['as' => 'cupom.index', 'uses' => 'CupomController@index']);
    Route::post('/cupom', ['as' => 'cupom.store', 'uses' => 'CupomController@store']);
    Route::get('/cupom/create', ['as' => 'cupom.create', 'uses' => 'CupomController@create']);
    Route::get('/cupom/{id}/edit', ['as' => 'cupom.edit', 'uses' => 'CupomController@edit']);
    Route::put('/cupom/{id}', ['as' => 'cupom.update', 'uses' => 'CupomController@update']);
    Route::delete('/cupom/{id}/destroy', ['as' => 'cupom.destroy', 'uses' => 'CupomController@destroy']);
});
