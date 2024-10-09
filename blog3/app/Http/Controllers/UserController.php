<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class UserController extends Controller
{
    function user(){
         $users=DB::select('select * from user');
         return view('users',['users'=>$users]);
    }




    //HTTP Client function
    // function getUser(){
    //     $response=Http::get('https://jsonplaceholder.typicode.com/users/1');
    //     return $response->status();
    // }



    //For API use
    public function check(Request $request)
    {
        // Check if 'user' field exists
        if (!$request->has('user')) {
            return response()->json([
                'message' => 'The user field is required.'
            ], 400); // 400 HTTP status for bad request
        }
    
        // Retrieve all input since the 'user' field exists
        $input = $request->all();
    
        // Further logic here...
    
        return response()->json([
            'message' => 'Request processed successfully',
            'data' => $input
        ], 200); // 200 HTTP status for success
    }

    function getmessage(){
       
        return 'i am chethan r';
   }


   //Database: Query Builder
   function queries(){
    $result=DB::table('students')->get();
    return view('users',['students'=>$result]);
   }
    

}
