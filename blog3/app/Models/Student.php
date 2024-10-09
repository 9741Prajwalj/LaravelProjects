<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    //protected $table="college_student";//If the table name is changed we will us this.

    function testFun(){
        return "this is dummy function";
    } 
}
