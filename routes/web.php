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

// About Us Page
Route::view('/about-us', 'about-us')->name('about-us');

// Campaigns Page
Route::view('/campaigns', 'campaigns')->name('campaigns');

// Contact Us Page
Route::view('/contact-us', 'contact-us')->name('contact-us');

// Donate Now Page
Route::view('/donate-now', 'donate-now')->name('donate-now');

// Events Page
Route::view('/events', 'events')->name('events');



// Welcome Page (Home)
Route::view('/', 'welcome')->name('welcome');