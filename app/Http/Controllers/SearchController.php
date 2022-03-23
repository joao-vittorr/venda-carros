<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advert;

class SearchController extends Controller
{

        public function list(Request $request){
    //Gate::authorize('viewAny', Advert::class);
    
    $pagination = Advert::orderBy("title");

    if (isset($request->busca) && $request->busca != "") {
        $pagination->orWhere("title","like","%$request->busca%");
        $pagination->orwhere("model","like","%$request->busca%");
        $pagination->orwhere("manuf_year","like","%$request->busca%");
        $pagination->orwhere("mileage","like","%$request->busca%");
    }


    return view("admin.advert.index", ["list"=>$pagination->paginate(3)]);
}

    public function index(Request $request){
        $data = Advert::all();
        return view("data", $data);
    }
  
}
