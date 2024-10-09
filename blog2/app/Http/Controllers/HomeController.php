<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // function show(){
    //     // return redirect()->to('home/profile/user');
    //     return to_route('hm');
    // }

    // function user(){
    //     // return redirect()->to('home/profile/user');
    //     return to_route('user',['name'=>'anil']);
    // }

    function show(){
        return "Student List";
    }

    function add(){
        return "add new students";
    }
}
