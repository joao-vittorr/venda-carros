<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController4 extends Controller
{
    public function index(Request $request){
        return view("post4");
    } 
}
