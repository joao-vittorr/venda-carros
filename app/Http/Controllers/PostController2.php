<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController2 extends Controller
{
    public function index(Request $request){
        return view("post2");
    } 
}
