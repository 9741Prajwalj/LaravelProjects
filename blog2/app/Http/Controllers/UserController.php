<?php

//Validation in PHP


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function addUser(Request $request){

       $request->validate([
              'username'=>'required | min:5 | max:15',
              'email'=>'required | email',
              'city'=>'required | max:20 | uppercase',
              'skill'=>'required',
       ],[
        'username.required'=>'username can not be empty',
        'username.min'=>'username min characters should be 3',
        // 'email.email'=>'this email is not valid',
        'city.uppercase'=>'city should be uppercase only',
       ]);

        return $request;
        // echo "user Name is: ".$request->username;echo "<br>";
        // echo "User City is: ".$request->city;echo "<br>";
        // echo "User Email is : ".$request->email;echo "<br>";
    }

    // function addUser(Request $request){
    //     // return $request;
    //     echo $request->city;echo "<br>";
    //     echo $request->gender;echo "<br>";
    //     echo $request->age;echo "<br>";
    //     $skills = $request->input('skill');  // Access the 'skill' array

    //     if(is_array($skills)) {
    //         print_r($skills);  // Print the array of skills
    //     } else {
    //         echo "No skills selected";
    //     }
    // }
}

