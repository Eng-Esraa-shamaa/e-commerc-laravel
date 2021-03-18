<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\registerAdminController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('Home', function () {
    return view('index');
});
Route::get('Register', function () {
    return view('register');
});
Route::get('RegisterAdmin', function () {
    return view('adminregister');
});
Route::post('welcomeadmin','registerAdminController@getAdmin');

Route::get('about', function () {
    return view('about');
});
Route::get('care', function () {
    return view('care');
});
Route::get('codes', function () {
    return view('codes');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('faqs', function () {
    return view('faqs');
});
Route::get('hold', function () {
    return view('hold');
});
Route::get('kitchen', function () {
    return view('kitchen');
});
Route::get('offer', function () {
    return view('offer');
});
Route::get('shipping', function () {
    return view('shipping');
});
Route::get('single', function () {
    return view('single');
});
Route::get('terms', function () {
    return view('terms');
});
Route::get('wishlist', function () {
    return view('wishlist');
});
Route::get('login', 'LoginController@login');

Route::get('AdminLogin', function () {
    return view('adminlogin');
});

Route::post('welcomeadmin', 'loginAdminController@loginadmin');

Route::get('logout', 'LoginController@logout');

Route::post('profile', 'LoginController@logindetails');

Route::get('admin', function () {
    return view('admin');
});
Route::post('welcomeUser','RegisterController@getprofile');

Route::get('showCustomers','AdminController@showCustomers');

Route::get('delete/{id}','AdminController@delete');

Route::get('products','AdminController@showproducts');

Route::get('deleteproduct/{id}','AdminController@deleteproduct');

Route::post('productstatus','AdminController@addproduct');

Route::get('editproduct/{id}','AdminController@show');

Route::post('editproduct','AdminController@editdata');










