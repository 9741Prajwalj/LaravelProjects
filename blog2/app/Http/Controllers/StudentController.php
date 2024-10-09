<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function show(){
        return "this is List of Students";
    }

    function add(){
        return "Adding the students list";
    }

    function delete(){
        return "Delete the students list";
    }

    function about($name){
        return "about the content---> `$name`";
    }
}
