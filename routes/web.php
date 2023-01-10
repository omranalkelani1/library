<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_login;
use App\Http\Controllers\c_customer;
use App\Http\Controllers\c_book;
use App\Http\Controllers\c_admin;
use App\Http\Controllers\c_tropes;
use App\Http\Controllers\c_category;



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
    return view('home');
});
Route::post("sign_up",[c_login::class,'store']);
Route::get("log_out",[c_login::class,'log_out']);
Route::post("/admin",[c_admin::class,'index']);
// category
Route::post("add_category",[c_category::class,'store']);
Route::post("delete_category",[c_category::class,'delete']);
Route::post("update_category",[c_category::class,'update']);
// tropes
Route::get("add_tropes",[c_tropes::class,'store']);
Route::get('all_tropes',[c_tropes::class,'index']);
Route::get('my_tropes',[c_tropes::class,'my_tropes']);
Route::get('delete_tropes',[c_tropes::class,'destroy']);
Route::get('update_tropes',[c_tropes::class,'update']);
// book
Route::get('all_books',[c_book::class,'index']);
Route::post("add_book",[c_book::class,'store']);
Route::get('delete_book',[c_book::class,'destroy']);
Route::get('update_book',[c_book::class,'show']);
Route::post('update_book',[c_book::class,'update']);
Route::get('search_book',[c_book::class,'index']);
// view
Route::view('bus',[c_customer::class,'store']);
Route::get('add_book',[c_category::class,'index']);
Route::view('home','home');
Route::view('login','login');
Route::view('sign_up','sign_up');
Route::view('admin','admin_page');
Route::view('add_category','add_category');
//my favourite
Route::get('my_favourite',[c_tropes::class,'my_favourite']);
//profile
Route::get('profile',[c_customer::class,'index']);
Route::post('profile',[c_customer::class,'update']);
