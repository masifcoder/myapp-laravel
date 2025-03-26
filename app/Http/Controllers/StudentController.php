<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    

    public function index() {

        return view("student.index");
    }

    public function createForm() {
        return view("student.createForm");
    }

    public function storeStudent() {

    }
}
