<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user',[UserController::class,'user']);
Route::get('std',[StudentController::class,'getStudents']);


// Route::get('users',[UserController::class,'getUser']);


//For API uses [Postman]
Route::get('message',function(){

    return "  i am god ";
});

Route::post('check',[UserController::class,'check']);

//DataBase: Query Builder
Route::get('users',[UserController::class,'queries']);
