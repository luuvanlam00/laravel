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
Route::get('/','Fontend@getHome');
Route::get('detail/{id}','Fontend@detail');
Route::post('detail/{id}','Fontend@postCom');
Route::get('product','Fontend@getPro');
Route::get('search/{id}','Fontend@getS');
Route::get('searchname','Fontend@search');
Route::get('searchprice/{ma}','Fontend@searchprice');
Route::prefix('cart')->group(function () {
    Route::get('add/{id}','CartCon@getadd');
    Route::get('show','CartCon@getshow');
    Route::get('delete/{id}','CartCon@getdelete');
    Route::get('update','CartCon@update');
    Route::post('show','CartCon@postcomplete');
    Route::get('muahang','CartCon@muahang');
    Route::post('muahang','CartCon@postmuahang');
});
Route::get('hoanthanh','CartCon@hoanthanh');

   


Route::namespace('admin')->group(function () {
    Route::prefix('login')->middleware('Checklogin')->group(function (){
        Route::get('/','UserCon@getLogin');
        Route::post('/','UserCon@postLogin');
    });
    Route::get('logout','HomeCon@getLogout');
    Route::prefix('admin')->middleware('Checklout')->group(function () {
        Route::get('/','HomeCon@getHome');

        Route::prefix('category')->group(function () {
            Route::get('/','CategoryCon@getCa');
            Route::get('them','CategoryCon@getAdd');
            Route::post('them','CategoryCon@postAdd');
            Route::get('sua/{id}','CategoryCon@getEdit');
            Route::post('sua/{id}','CategoryCon@postEdit');
            Route::get('xoa/{id}','CategoryCon@delete');
        });

        Route::prefix('ncc')->group(function () {
            Route::get('/','Ncc@get');
            Route::get('them','Ncc@getAdd');
            Route::post('them','Ncc@postAdd');
            Route::get('sua/{id}','Ncc@getEdit');
            Route::post('sua/{id}','Ncc@postEdit');
            Route::get('xoa/{id}','Ncc@delete');
        });
        Route::prefix('product')->group(function () {
            Route::get('/','ProductCon@get');
            Route::get('them','ProductCon@getAdd');
            Route::post('them','ProductCon@postAdd');
            Route::get('sua/{id}','ProductCon@getEdit');
            Route::post('sua/{id}','ProductCon@postEdit');
            Route::get('xoa/{id}','ProductCon@delete');
        });
        Route::prefix('binhluan')->group(function () {
            Route::get('/','Binhluan@get');
            Route::get('sua/{id}','Binhluan@getEdit');
            Route::post('sua/{id}','Binhluan@postEdit');
            Route::get('xoa/{id}','Binhluan@delete');
        });
        Route::prefix('khachhang')->group(function () {
            Route::get('/','khach@get');
            Route::get('them','khach@getAdd');
            Route::post('them','khach@postAdd');
            Route::get('sua/{id}','khach@getEdit');
            Route::post('sua/{id}','khach@postEdit');
            Route::get('xoa/{id}','khach@delete');
        });
        Route::prefix('hoadon')->group(function () {
            Route::get('/','HD@get');
            Route::get('sua/{id}','HD@getEdit');
            Route::post('sua/{id}','HD@postEdit');
            Route::get('xoa/{id}','HD@delete');
            Route::get('chitiet/{id}','HD@chitiet');

        });
        
    });
});
