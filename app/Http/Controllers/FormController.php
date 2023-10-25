<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;


class FormController extends Controller
{
    function store_data(Request $request) {
        // global variable for database
        $data = new Student;

        // passing the input data to global variable
        $data->name = $request->Input('name');
        $data->email = $request->Input('email');
        $data->number = $request->Input('number');
        $data->password = $request->Input('password');

        // save data to database
        $data->save();

        // redirect to form
        return back();
    }

    function getData() {
        $getData = Student::all();
        return view('student-records', compact('getData'));
    }
}
