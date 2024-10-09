<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{

    //Controller Function
    // function getUser(){
    //     // return "prajjju";
    //     return view('user');
    // }

    // function aboutUserr(){
    //     echo "Hello laravel I'm using You😜";
    // }

    // function getUserName($name){
    //     // echo "hello this is an ".$name;
    //     return view('getUserName',['name'=>$name]);
    // }


    // function adminLogin(){
    //     return view('admin.login');
    // }

  // View function

    //   function userName(){
    //     return view('home');
    //   }

    //   function userAbout(){
    //     return view('about');
    //   }

    //   function adminLogiin(){
    //     if(view::exists('admin.signup')){
    //         return view("admin.signup");
    //     }else{
    //         echo "No View found";
    //     }

    //     if(view::exists('admin.logiin')){
    //         return view("admin.logiin");
    //     }else{
    //         echo "No View found";
    //     }
    //   }

//Blade Template in PhP


        // function userHome(){
        //     $name="sam";
        //     $users=['anil','sam','peter'];
        //     return view('userHome',["name"=>$name,"users"=>$users]);
        // }


//Sub View in Laravel

        //  function Home(){
        //       return view('common.inner');
        // }
        // function About()  {
        //     return view('about');
        // }

//Component in Laravel

       function Home(){
            return view('about');
       }

}
