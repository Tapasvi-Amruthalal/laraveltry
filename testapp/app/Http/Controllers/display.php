<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;            
use App\Models\test;
class display extends Controller
{
    //
    function show(){
        $list= test::all();
        return view('song', ['songs'=>$list]);
    }
}
