<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
//use App\Http\Controllers\HomeController;
//use App\Http\Controllers\StudentController;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;


Route::get('/', function () {
    return view('welcome');
});

//Validation in PHP

// Route::view('user-form','user-form');

// Route::post('adduser',[UserController::class,'addUser']);

//URL Generation

// Route::view('home','home');

// Route::view('user','home');

// Route::view('about','about');
// Route::view('about/{name}','about');

//Named Routes

// Route::view('home/profile/user','home')->name('hm');
// Route::view('home/profile/{name}','home')->name('user');

// Route::get('show',[HomeController::class,'show']);



//Route Group with prefix

// Route::prefix('student')->group(function(){
//     Route::view('home','home');
//     Route::get('add',[HomeController::class,'add']);
//     Route::get('show',[HomeController::class,'show']);
// });

//Route Group with Controller

// Route::controller(StudentController::class)->group(function(){

//     Route::get('show','show');
//     Route::get('add','add');
//     Route::get('delete','delete');
//     Route::get('about/{name}','about');
// });



//Middleware in Laravel

// Route::view('about','about');
// Route::view('home','home');
// Route::view('list','about');
// Route::view('contact','home');

//Middleware Group

// Route::view('about','about')->middleware('check1');
// Route::middleware('check1')->group(function(){
//     Route::view('about','about');
//     Route::view('home','home');
//     Route::view('list','about');
//     Route::view('contact','home');
// });

//Assigning Middleware to Routes

Route::view('home','home')->middleware([AgeCheck::class,CountryCheck::class]);

Route::view('about','about')->middleware([AgeCheck::class,CountryCheck::class]);




















