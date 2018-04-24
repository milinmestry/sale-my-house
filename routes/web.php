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
    return view('home');
    // return view('welcome');
});

Auth::routes();

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/property/search', 'PropertyController@search')->name('property-search');

Route::resources([
  'broker' => 'BrokerController',
  'buyer' => 'BuyerController',
  'enquiry' => 'PropertyEnquiryController',
  'property' => 'PropertyController',
  'seller' => 'SellerController',
  'user' => 'UserController',
]);