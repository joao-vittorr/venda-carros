<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TypeRequest;
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
        $postsList = Post::all();
        return view("admin.type.form", ["data"=>new Type(),
                                            "postsList"=>$postsList] );
    }

    public function validator(array $data){
        $rules = [
            'name' => 'required|max:500',
            //'post_id' => 'exclude_if:post_id,null|exists:posts,id',
        ];

        return Validator::make($data, $rules)->validate();
    }

    public function store(Request $request){
        $validated = $this->validator($request->all());
        
        $typ = Type::create($validated);

        
        #vinculação com post
        $post = Post::find($request["post_id"]);
        //TypePost::updateOrCreate(["post_id"=>$post->id,"type_id"=>$cat->id]);
    

        return redirect(route("type.edit", $cat))->with("success",__("Data saved!"));
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
        $postsList = Post::all();

        $posts = Post::select("posts.*", "type_posts.id as type_posts_id")
                ->join("type_posts","type_posts.post_id","=","posts.id")
                ->where("type_id",$type->id)->paginate(2);
    
        
        return view("admin.type.form",["data"=>$type,
                                           "postsList"=>$postsList,
                                           "posts"=>$posts
                                         ]);
    }

    #salva as edições
    public function update(Type $type, Request $request) {
        $validated = $this->validator($request->all());
        $type->update($validated);


        $post = Post::find($request["post_id"]);
        #na documentação consta esse método
        #funciona, mas não insere os timestamps
        #$type->posts()->attach($post);
        TypePost::updateOrCreate(["post_id"=>$post->id,"type_id"=>$type->id]);
    

        return redirect()->back()->with("success",__("Data updated!"));
    }

}
