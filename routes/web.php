<?php

use Illuminate\Support\Facades\Route;

// controller
use App\Http\Controllers\FormController;

// welcome page
Route::get('/', function () {
    return view('welcome');
});

// form
Route::get('form', function () {
    return view('form');
});

// students records page
Route::get('student-records', [FormController::class, 'getData']);

// post data to database 
Route::post('store_data', [FormController::class, 'store_data']);

