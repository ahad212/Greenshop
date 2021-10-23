<?php

use Illuminate\Support\Facades\Route;
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

Route::prefix('laraecomm')->group(function() {

    Route::post('/admin/login/token','AdminpanelController@adminlogin')->name('logintoken');
    Route::post('/subadmin/login/token','AdminpanelController@subadminlogin')->name('sublogintoken');
    Route::post('/seller/login/token','AdminpanelController@sellerlogin')->name('sellerlogintoken');
    
    // admin order route

    Route::get('/admin/order/allorder','OrderController@allorder')->name('allorder');
    Route::get('/admin/order/{id}/allorderedit','OrderController@allorderIdwise')->name('editallorder');
    Route::post('/admin/order/{id}/updateorder','OrderController@updateallorder')->name('updateallorder');

    Route::get('/admin/order/cancel', 'OrderController@cancelorder')->name('cancel');

    Route::get('/admin/order/complete','OrderController@completeorder')->name('complete');
    Route::get('/admin/order/curiar', 'OrderController@curiarorder')->name('curiar');
    Route::get('/admin/order/exchange', 'OrderController@exchangeorder')->name('exchange');
    Route::get('/admin/order/pending','OrderController@pendingorder')->name('pending');
    Route::get('/admin/order/processingorder', 'OrderController@processingorder')->name('processingorder');
    Route::get('/admin/order/refund', 'OrderController@refundorder')->name('refund');

    // Route::get('/admin/order/getorder','OrderController@allorder')->name('allOrder');  all order route
    


    // admin product route

    Route::get('/admin/product/addnew','product@addnew')->name('addnew');
    Route::post('/admin/product/insert','product@storeproduct')->name('pinsert');
    Route::post('/admin/product/update','product@updateProduct')->name('pupdate');
    Route::post('/admin/attach/insert','product@storeattach')->name('attachinsert');



    Route::get('/admin/product/addvirtual', 'product@virtualcreate')->name('addvirtual');


    Route::get('/admin/product/allproducts','product@allproducts')->name('allproducts');

    Route::get('/admin/product/recentproducts', 'product@recent')->name('recentproducts');

    Route::get('/admin/product/brand','product@getbrandlist')->name('brand');
    Route::any('/admin/manage/category','product@brandIndex')->name('category');
    Route::any('/admin/manage/category/{id}/edit','product@brandeditview')->name('categoryeditedit');
    Route::put('/admin/manage/category/{id}/update','product@brandUpdate')->name('categoryupdate');
    Route::any('/admin/branding/insert','product@brandInsert')->name('binsert');

    Route::get('/admin/product/pendingproducts', function () {
        return view('admin.product.pendingproducts');
    })->name('pendingproducts');

    Route::get('/admin/products/edit/{id}','product@editnew')->name('editprod');
   // user route

    Route::get('/admin/manage/adminlist','subadminController@admin')->name('admin');
    Route::get('/admin/manage/subadmin','SubadminController@create')->name('createadmin');
    Route::post('/admin/manage/createadmin','SubadminController@store')->name('storeadmin');
    Route::get('/admin/manage/{id}/edit','SubadminController@edit')->name('editadmin');
    Route::post('/admin/manage/{id}/update','SubadminController@update')->name('updateadmin');
    Route::get('/admin/manage/seller','adminmanage@getseller')->name('seller');
    Route::get('/admin/manage/user', 'adminmanage@getuser')->name('user');
    Route::get('/admin/manage/user/{id}/edit', 'adminmanage@getEdituser')->name('editusers');
    Route::post('/admin/manage/user/update/{id}', 'adminmanage@updateuser')->name('updateusers');

    // site route

    Route::get('/admin/setting/affiliate', function () {
        return view('admin.site.affiliate');
    })->name('affiliate');

    Route::prefix('admin/setting')->group(function() {
        Route::resource('location', 'setting');
    });



   // user Gateway route

    Route::get('/admin/Gateway/bank', function () {
        return view('admin.getway.bank');
    })->name('bank');
    Route::get('/admin/Gateway/cash', function () {
        return view('admin.getway.cash');
    })->name('cash');
    Route::get('/admin/Gateway/emipayment', function () {
        return view('admin.getway.emipayment');
    })->name('emipayment');
    Route::get('/admin/Gateway/mobile', function () {
        return view('admin.getway.mobile');
    })->name('mobile');

});