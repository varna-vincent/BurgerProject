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
Auth::routes();

Route::get('/', function () { return view('home'); });

Route::get('/home', function () { return view('home'); });

Route::get('/about', function () { return view('about'); });

Route::get('/contact', function () { return view('contact'); });

Route::Resource('products', 'ProductController');

Route::group(['middleware' => ['auth']], function () {

	Route::get('orders/{status}', ['as' => 'orders.index', 'uses' => 'OrderController@index']);
    Route::resource('orders', 'OrderController', ['except' => ['index', 'create', 'edit']]);
    Route::resource('orderproducts', 'OrderProductController', ['except' => ['index', 'create', 'edit', 'store', 'show', 'update']]);
});

Route::get('/forgotpwd', function () {
    return view('forgotPwd');
});
Route::get('/checkEmail', function () {
    return view('checkEmail');
});
Route::get('/resetPassword', function () {
    return view('ResetPwd');
});