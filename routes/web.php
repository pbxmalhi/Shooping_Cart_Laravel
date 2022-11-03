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

// Default Route for the welcome page (laravel)
Route::get('/', function () {
    return view('welcome');
});

// Route to display the home page
Route::get('index', 'App\Http\Controllers\EnusController@index');

// Route to add products in the cart
Route::post('addToCart', 'App\Http\Controllers\EnusController@addToCart');

// Route to display buy cart page
Route::get('buycart', 'App\Http\Controllers\EnusController@buycart');

// Route to display selected product on the buy cart page
Route::get('buycart/{id}', 'App\Http\Controllers\EnusController@buycartAdded');

// Route to display the checkout page
Route::get('checkout', 'App\Http\Controllers\EnusController@checkout');

// Route to display products page
Route::get('products', 'App\Http\Controllers\EnusController@products');

// Route to display products according to the category
Route::get('products/{id}', 'App\Http\Controllers\EnusController@productsCat');

// Route to display signup page/ login page
Route::get('signup', 'App\Http\Controllers\EnusController@signup');

// Route for the login page submissions
Route::post('login_submit', 'App\Http\Controllers\EnusController@login_submit');

// Route for the new user's Signup
Route::post('newUser', 'App\Http\Controllers\EnusController@newUser');

// Route to display Contact Us page
Route::get('contactus', 'App\Http\Controllers\EnusController@contactus');
