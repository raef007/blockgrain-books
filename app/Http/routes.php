<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/home', 'AngularRouteController@showHome');
Route::get('/employee/{emp_id}', 'AngularRouteController@showEmployeeTransaction');

Route::get('api/getShops', 'ShopController@getAllShops');
Route::get('api/getShopBooks/{source_id}', 'BookController@getShopBooks');
Route::post('api/verifyTransaction', 'TransactionController@validateTransaction');
Route::get('api/getEmpTrans/{emp_id}', 'TransactionController@getEmployeeTransactions');

