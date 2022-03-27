<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Type;
use App\Models\TypePost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
    
    public function validator(array $data){
        $rules = [
            'name' => 'required|max:500',
        ];

        return Validator::make($data, $rules)->validate();
    }
    

    public function list(Request $request){
        $pagination = Type::orderBy("name");

        if (isset($request->busca) && $request->busca != "") {
            $pagination->orWhere("name","like","%$request->busca%");
        }

       
        return view("admin.type.index", ["list"=>$pagination->paginate(3)]);
    }

    public function create(){
        $typeList = Type::all();

        return view("admin.type.form", ["data"=>new Type(), "typeList"=>$typeList] );
    }

    public function store(Request $request){
        $validated = $this->validator($request->all());
        $typ = Type::create($validated);

        
       

        return redirect(route("type.edit", $typ))->with("success",__("Data saved!"));
    }

    public function destroy(Type $type){
        $type->delete();
        return redirect(route("type.list"))->with("success",__("Data deleted!"));
    }

    public function desvincular(TypePost $type_post){
        $type_post->delete();
        return redirect()->back()->with("success",__("Data deleted!"));
    }


   
    public function edit(Type $type){
        $typeList = Type::all();

        $types = Type::select("types.*", "type_ads.id as type_ads_id")
                        ->join("type_ads","type_ads.type_id","=","types.id")
                       ->where("type_id",$type->id)->paginate(2);
          

        return view("admin.type.form",["data"=>$type, "typeList"=>$typeList, "types"=>$types]);
    }
    
   
    public function update(Type $type, Request $request) {
        $validated = $this->validator($request->all());
        $type->update($validated);


        
        TypePost::updated(["name"=>$type->name]);
    

        return redirect()->back()->with("success",__("Data updated!"));
    }

}