<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advert;

class SearchController extends Controller
{

    public function list(Request $request){
    
    
    $pagination = Advert::orderBy("title");

    if (isset($request->busca) && $request->busca != "") {
        $pagination->orWhere("title","like","%$request->busca%");
        $pagination->orwhere("model","like","%$request->busca%");
        $pagination->orwhere("manuf_year","like","%$request->busca%");
        $pagination->orwhere("mileage","like","%$request->busca%");
        $pagination->orwhere("color","like","%$request->busca%");
        $pagination->orwhere("categories.name","like","%$request->busca%");
        $pagination->orwhere("types.name","like","%$request->busca%");

        $pagination->join('categories', 'categories.id', '=', 'adverts.category_id');
        $pagination->join('types', 'types.id', '=', 'adverts.type_id');
    }

    

    return view("admin.advert.index", ["list"=>$pagination->paginate(3)]);
}

    public function index(Request $request){

        $data = Advert::all();
        return view("index", ["data"=>$data]);
    }
  
}
