<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => '/'], function () {
  route::get('/', 'HomeController@index')->name('/');
  route::get('products/{id}', 'HomeController@productsUpdate')->name('update-products');
  route::post('products/{id}', 'HomeController@saveProducts')->name('save-products');
  route::get('products/details/{id}', 'HomeController@productsDetails')->name('view-products');
});

Route::post('/ajax/delete-item', 'AjaxController@selectedItemDeleteById')->name('selected-item-delete');