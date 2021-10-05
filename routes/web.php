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



Auth::routes(['register'=>false]);



Route::middleware(['auth'])->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    
    //Menu Route
    Route::get('menu','MenuController@index')->name('menu');

    Route::group(['prefix'=>'menu','as'=>'menu.'],function(){
        Route::post('datatable','MenuController@get_data_table')->name('data.table');
        Route::post('storeOrUpdate','MenuController@store_or_update')->name('store.or.update');
        Route::post('edit','MenuController@edit')->name('edit');
        Route::post('delete','MenuController@delete')->name('delete');
        Route::post('bulk_action_delete','MenuController@bulk_action_delete')->name('bulk.action.delete');
    });
});


