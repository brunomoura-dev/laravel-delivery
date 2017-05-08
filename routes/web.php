<?php
Auth::routes();
Route::get('/', function(){
    return view('welcome');
})->name('welcome');
/** PAINEL ADMINISTRATIVO EXCLUSIVO */
Route::group(['prefix' => 'admin', 'middleware' => 'auth.checkrole', 'as' => 'admin.', 'namespace' => 'Admin'], function(){
    Route::get('/', ['as' => 'home', 'uses' => 'DashboardController@index']);
    Route::resource('category', 'CategoriesController');
    Route::resource('product', 'ProductsController');
});
