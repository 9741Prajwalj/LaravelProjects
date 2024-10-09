<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function getStudents(){
        $data=new \App\Models\Student;
        echo $data->testFun();
        $student=\App\Models\Student::all();
        return view('students',['data'=>$student]);
    }
}
