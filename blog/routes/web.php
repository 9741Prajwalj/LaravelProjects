<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

//Controller

// Route::get('user',[UserController::class,'getUser']);
// Route::get('about',[UserController::class,'aboutUser']);
// Route::get('greeting',function (){
//     echo "Good Moring❤️💕";
// });

// Route::get('user/{name}',[UserController::class,'getUserName']);


// Route::get('admin',[UserController::class,'adminLogin']);


//View

// Route::view('/home','home');
// Route::view('/about','about');
// Route::view('adminLogin','admin.logiin');

// Route::get('/user-name',action: [UserController::class,'userName']);
// Route::get('/user-about',action: [UserController::class,'userAbout']);
// Route::get('/admin-logiin',[UserController::class,'adminLogiin']);

//Blade Tamplate in Laravel

// Route::get('userHome',[UserController::class,'userHome']);


//Sub-View in Laravel

// Route::get('user-home',[UserController::class,'Home']);
// Route::get('user-about',[UserController::class,'About']);

//Component in Laravel

Route::get('home',[UserController::class,'Home']);

















