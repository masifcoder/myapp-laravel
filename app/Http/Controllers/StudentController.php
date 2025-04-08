<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{


    public function index()
    {


        $students = Student::all();

        // dd($students);

        return view("student.index", ["students" => $students]);
    }

    public function createForm()
    {
        return view("student.createForm");
    }

    public function storeStudent(Request $request)
    {

        // validate data

        $request->validate([
            'name' => "required|max:60",
            'age' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048'

        ], [
            'name.required' => "Name field is required, please fill it.",
            "name.max" => "Name is too large"
        ]);


        // upload image
        $path = $request->file('image')->store("uploads", "public");
        
// dd($path);

        // store data into db
        Student::create([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'city' => $request->input('city'),
            'image' => $path
        ]);

        return redirect()->route("student.index");
        // dd($request->input('name'));
        // dd($request->age);
    }

    public function delete($id)
    {


        $student =  Student::find($id);

        if ($student != null) {
            $student->delete();
            return redirect()->route("student.index")->with("success", "Successfully deleted");
        }

        return redirect()->route("student.index")->with("error", "Record not found");
    }
}
