<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('page1');
})->name('index');
Route::get('/page3', function(){
    return view('page3');
});
/////////////
Route::get('admin/bubugihu/secret', function (){
    return view ('admin.index');
})->name('admin');
Route::get('admin/customer/listCustomer', function(){
    return view('admin.customer.listCustomer');
})->name('list');



