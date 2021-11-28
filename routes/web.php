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
Route::prefix('laraecomm')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/home','product@home')->name('home');
    Route::get('/wishlist', function () {
        return view('whichlist');
    })->name('wich');
    Route::get('/recently', function () {
        return view('recent');
    })->name('recent');
    Route::get('/account', function () {
        return view('account');
    })->name('account');
    Route::get('/cart', function () {
        return view('cart');
    })->name('cart');
    Route::get('/checkout', function () {
        return view('checkout');
    })->name('checkout');
    Route::get('/ProductCategory/{name}', 'product@category')->name('categoryclient');
    Route::get('/Product/{p_name}','product@individualproductblade')->name('product_details');
    Route::fallback(function () {
        return view('admin.404');
    });
 
    // admin rotes
    Route::get('/admin/login',function(){
        return view('admin.login');
    })->name('login');

    Route::get('/adminpanel/login',function(){
        return view('admin.subadminlogin');
    })->name('subadminlogin');

    Route::get('/seller/login',function(){
        return view('admin.sellerlogin');
    })->name('sellerlogin');



    Route::redirect('/admin','/laraecomm/admin/dashboard');
    Route::redirect('/adminpanel','/laraecomm/admin/dashboard');
    Route::redirect('/seller','/laraecomm/admin/dashboard');

    Route::get('/admin/dashboard',function(){
        return view('admin.adminwelcom');
    })->name('dashboard');
    
    Route::get('/admin/main_dashboard',function(){
        return view('admin.root');
    })->name('adhome');
    Route::redirect('/admin/dashboard','/laraecomm/admin/main_dashboard');
    
    Route::get('/admin/recover_password',function(){
        return view('admin.password');
    })->name('password');

    Route::get('/admin/register',function(){
        return view('admin.register');
    })->name('register');

    Route::get('/admin/category','admin@categorypage')->name('categoryadmin');

    Route::get('/admin/brand','admin@brand')->name('brand');
    Route::get('/admin/product','admin@getproduct')->name('product');

    Route::get('/admin/category/manage',function(){
        return view('admin.catalog.addcategory');
    })->name('Categoryadd');
    
    Route::get('/admin/category/{id}/edit','admin@edit')->name('Categoryedit');

    Route::get('/admin/brand/manage',function(){
        return view('admin.catalog.addbrand');
    })->name('brandadd');
    Route::get('/admin/product/manage','admin@productaddselect')->name('productadd');
    Route::any('/admin/category/postdata','admin@insert')->name('insert');
    Route::any('/admin/category/editdata/{id}','admin@editdata')->name('edit');
    Route::any('/admin/brand/postdata','admin@insertbrand')->name('insertbrand');

    Route::get('/admin/brand/{id}/edit','admin@brandedit')->name('brandedit');
    Route::any('/admin/brand/editdata/{id}','admin@editbrand')->name('editbrand');

    Route::any('/admin/product/postdata','admin@insertproduct')->name('insertproduct');
    Route::get('/admin/product/{id}/edit','admin@productedit')->name('productedit');
    Route::any('/admin/product/editdata/{id}','admin@editproduct')->name('editproduct');



    Route::get('/admin/sell',function () {
        return view('admin.sellOffer.sell');
    })->name('sell');
    
    Route::get('/admin/offer',function () {
        return view('admin.sellOffer.offer');
    })->name('offer');
    Route::get('/profile',function() {
        return view('profile');
    });

});
Route::get('/laraecomm/profile/{vue?}', function ($search) {
    return view('profile');
})->where('vue', '.*?');
Route::redirect('/laraecomm/','/laraecomm/home');
