<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
class showlist extends Controller
{
    //
    function show(){
        $data=member::all();
        return view('show', ['members'=>$data]);
        // return $data;
        // return view('show');
    }
}
