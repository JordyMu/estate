<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages/home');
});

// show All Listings
Route::get('/{property_type}/{listing_type}/', function () {
    return view('welcome');
});

// Single Listing
Route::get('/listing/{slug}/{id}', function () {
    return view('welcome');
});

// User Login
Route::get('/login', function () {
    return view('welcome');
});
// User Register
Route::get('/register', function () {
    return view('welcome');
});
// User Saved Listings
Route::get('/account/saved', function () {
    return view('welcome');
});
// User Showing Status
Route::get('/account/show-status', function () {
    return view('welcome');
});

