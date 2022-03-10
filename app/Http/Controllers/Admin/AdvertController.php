<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdvertRequest;
use App\Models\Category;
use App\Models\Type;
use App\Models\Advert;
use App\Models\Category_ads;
use App\Models\Type_ads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class AdvertController extends Controller
{
        
    public function list(Request $request){
        //Gate::authorize('viewAny', Advert::class);
        
        $pagination = Advert::orderBy("title");

        if (isset($request->busca) && $request->busca != "") {
            $pagination->orWhere("name","like","%$request->busca%");
            $pagination->orWhere("text","like","%$request->busca%");
        }

        if (isset($request->type) && $request->type != "")
            $pagination->where("type","like","%$request->type%");
        
        if (isset($request->brand) && $request->brand != "")
            $pagination->where("brand","like","%$request->brand%");

        if (isset($request->model) && $request->model != "")
            $pagination->where("model","like","%$request->model%");

        if (isset($request->color) && $request->color != "")
            $pagination->where("color","like","%$request->color%");

        if (isset($request->mult) && $request->mult != "")
            $pagination->where("mult","like","%$request->mult%");

        if (isset($request->manuf_year) && $request->manuf_year != "")
            $pagination->where("manuf_year","like","%$request->manuf_year%");

        if (isset($request->description) && $request->description != "")
            $pagination->where("description","like","%$request->description%");

        if (isset($request->mileage) && $request->mileage != "")
            $pagination->where("mileage",$request->mileage);

        if (isset($request->price) && $request->price != "")
            $pagination->where("price",$request->price);

        #$pagination->dd();
        #$pagination->dump();
        return view("admin.advert.index", ["list"=>$pagination->paginate(3)]);
    }

    public function create(){
        //Gate::authorize('create', Advert::class);
        $categoriesList = Category::all();
        $typesList = Type::all();
        return view("admin.advert.form", ["data"=>new Advert(),
                                        "typesList"=>$typesList, "categoriesList"=>$categoriesList] );
    }

    public function store(AdvertRequest $request){
        
        //Gate::authorize('create', Advert::class);
        $validated = $request->validated();

        $path = $request->file('photo')->store('advert',"public");

        $data = $request->all();
        $data["photo"] = $path;
        $data["user_id"] = Auth::user()->id;

        $advert = Advert::create($data);


        return redirect(route("advert.edit", $advert))->with("success",__("Data saved!"));
    }



    public function destroy(Advert $advert){
        //Gate::authorize('delete', $advert);
        $advert->delete();
        return redirect(route("advert.list"))->with("success",__("Data deleted!"));
    }


    #abre o formulario de edição
    public function edit(Advert $advert){
        //Gate::authorize('view', $advert);
        $categoriesList = Category::all();
        $typesList = Type::all();


        $categories = Category::select("categories.*", "category_ads.id as category_ads_id")
                        ->join("category_ads","category_ads.category_id","=","categories.id")
                        ->where("advests_id",$advert->id)->paginate(2);
        
        $types = Type::select("types.*", "type_ads.id as type_ads_id")
                       ->join("type_ads","type_ads.type_id","=","types.id")
                       ->where("advests_id",$advert->id)->paginate(2);


        return view("admin.advert.form",["data"=>$advert, "typesList"=>$typesList,
                                         "types"=>$types, "categoriesList"=>$categoriesList,
                                         "categories"=>$categories]);;
    }

    #salva as edições
    public function update(Advert $advert, AdvertRequest $request) {
        //Gate::authorize('update', $advert);
        $validated = $request->validated();

        $data = $request->all();
        #necessário, pois não é obrigatório atualizar a imagem
        if ($request->file('photo') != null){
            $path = $request->file('photo')->store('posts',"public");
            $data["photo"] = $path;
        }

        $advert->update($data);



        return redirect()->back()->with("success",__("Data updated!"));
    }

    

}
