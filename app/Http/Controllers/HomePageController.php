<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(Request $request){

        $pagination = Advert::orderBy("title");

        return view('home_page', ["data"=>$pagination->paginate(5)]);
    }

    public function search(Request $request){
        return view("search");
    }
        

}
