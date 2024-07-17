<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {
        $students = array(
            ["id" => 1, "name" => "Nguyen Van A", "class_code" => "CS101"],
            ["id" => 2, "name" => "Tran Thi B", "class_code" => "CS102"],
            ["id" => 3, "name" => "Le Van C", "class_code" => "CS101"],
            ["id" => 4, "name" => "Pham Thi D", "class_code" => "CS103"]
        );
        return view('home',compact('students'));
    }
    public function show($id)
    {
        $students = array(
            ["id" => 1, "name" => "Nguyen Van A", "class_code" => "CS101"],
            ["id" => 2, "name" => "Tran Thi B", "class_code" => "CS102"],
            ["id" => 3, "name" => "Le Van C", "class_code" => "CS101"],
            ["id" => 4, "name" => "Pham Thi D", "class_code" => "CS103"]
        );
        $studentbyid=null;
        foreach ($students as $student) {
            if ($student['id'] == $id) {
                $studentbyid = $student;
                break;
            }
        }
        return view('homeshow',['student'=>$studentbyid]);
    }
}