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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix'=>'admin', 'middleware'=>'auth'],function(){

    Route::get('/',function(){
        return 'Ini Halaman Admin';
    });

    Route::get('/data',function(){
        return 'data admin';
    });

    Route::get('/jabatan',function(){
        return 'jabatan admin';
    });
    
});


Route::group(['prefix'=>'manager'],function(){

    Route::get('/',function(){
        return 'Ini Halaman Manager';
    });

    Route::get('/gaji',function(){
        return 'Data gaji manager';
    });

    Route::get('/bekerja',function(){
        return 'Data lama bekerja manager';
    });

});


Route::group(['prefix'=>'karyawan'],function(){

    Route::get('/',function(){
        return 'Ini Halaman Karyawan';
    });

    Route::get('/jabatan',function(){
        return 'Data jabatan';
    });

    Route::get('/gaji',function(){
        return 'Data gaji karyawan';
    });

    Route::get('/bekerja',function(){
        return 'Data lama bekerja karyawan';
    });

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
