<?php

use Illuminate\Support\Facades\Route;

// controller
use App\Http\Controllers\FormController;

// welcome page
Route::get('/', function () {
    return view('welcome');
});

// students form
Route::get('form', function () {
    return view('form');
});

// show data to students records view
Route::get('student-records', [FormController::class, 'getData']);

// post data to database 
Route::post('store_data', [FormController::class, 'store_data']);

// delete record
Route::get('delete_record/{id}', [FormController::class, 'delete_record']);

// edit record
Route::get('edit_record/{id}', [FormController::class, 'edit_record']);

// update data using post
Route::post('update_data/{id}', [FormController::class, 'update_data']);
