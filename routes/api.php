<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::any('/user/create','userController@storeuser');
Route::any('/user/login','userController@userlogin');
Route::get('/v1/products','product@getProducts');
Route::get('/v1/product/{product_name}','product@individualproduct');
Route::get('/V1/location','setting@getlocation');


// Api for admin web
Route::post('/v1/singleproductedit','product@idwiseimageedit');
Route::post('/v1/singleproductbyslug','product@slugproduct');
//id wise category api for delete category 
Route::post('/v1/test','product@testing');
Route::post('/v1/deletcat','product@delcategorysub');


// insert & getting address 
Route::post('/address/update','userController@insertAddress');
Route::post('/address/getAddr','userController@getAddress');

// order api
Route::post('/order/insert','OrderController@insertOrder');

//search api
Route::post('/product/search','product@searchApi');

//review post api

Route::post('/product/review','product@rating');


