<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Type;
use App\Models\TypePost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
        
    public function list(Request $request){
        $pagination = Type::orderBy("name");

        if (isset($request->busca) && $request->busca != "") {
            $pagination->orWhere("name","like","%$request->busca%");
        }

        #$pagination->dd();
        #$pagination->dump();
        return view("admin.type.index", ["list"=>$pagination->paginate(3)]);
    }

    public function create(){
        //$postsList = Post::all();
        return view("admin.type.form", ["data"=>new Type()] );
    }

    public function store(Request $request){
        $validated = $this->validator($request->all());
        
        $typ = Type::create($validated);

        
        #vinculação com post
        //$post = Post::find($request["post_id"]);
        //CategoryPost::updateOrCreate(["post_id"=>$post->id,"category_id"=>$cat->id]);
    

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


    #abre o formulario de edição
    public function edit(Type $type){
        //$postsList = Post::all();

        //$posts = Post::select("posts.*", "category_posts.id as category_posts_id")
                //->join("category_posts","category_posts.post_id","=","posts.id")
                //->where("category_id",$category->id)->paginate(2);
    
        
        return view("admin.type.form",["data"=>$type]);
    }

    #salva as edições
    public function update(Type $type, Request $request) {
        $validated = $this->validator($request->all());
        $type->update($validated);


        //$post = Post::find($request["post_id"]);
        #na documentação consta esse método
        #funciona, mas não insere os timestamps
        #$category->posts()->attach($post);
        TypePost::updated(["name"=>$type->name]);
    

        return redirect()->back()->with("success",__("Data updated!"));
    }

}