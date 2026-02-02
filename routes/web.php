<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index');
Route::view('/who-we-serve', 'who-we-serve');
Route::view('/about-us', 'about-us');
Route::view('/contact-us', 'contact-us');

// Solutions
Route::view('/remote-patient-monitoring', 'solutions.remote-patient-monitoring');
Route::view('/chronic-care-management', 'solutions.chronic-care-management');
Route::view('/billing-and-rcm', 'solutions.billing-and-rcm');

// Incomplete
Route::view('/principal-care-management', 'solutions.principal-care-management');
