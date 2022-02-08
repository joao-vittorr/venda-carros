<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController1 extends Controller
{
    public function index(Request $request){
        return view("post1");
    } 
}
