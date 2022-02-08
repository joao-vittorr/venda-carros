<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController3 extends Controller
{
    public function index(Request $request){
        return view("post3");
    } 
}
