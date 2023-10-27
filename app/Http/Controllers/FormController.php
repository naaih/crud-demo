<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;


class FormController extends Controller
{
    function store_data(Request $request) {
        // global variable for storing data
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

    // get data
    function getData() {
        $getData = Student::all();
        return view('student-records', compact('getData'));
    }

    // delete record
    function delete_record($id) {
        Student::destroy($id);

        return back();
    }

    // edit record
    function edit_record($id) {
        $getData = Student::find($id);

        return view('edit-form', compact('getData'));
    }

    // update record
    function update_data(Request $request, $id) {
        $data = Student::find($id);

        // passing the input data to global variabe
        $data->name = $request->Input('name');
        $data->email = $request->Input('email');
        $data->number = $request->Input('number');
        $data->password = $request->Input('password');

        // save data to database
        $data->save();

        // redirect to form
        return redirect('student-records');
    }
}
