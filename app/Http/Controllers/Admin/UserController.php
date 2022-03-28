<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
        
    public function list(Request $request){
        $pagination = User::orderBy("name");

        if (isset($request->busca) && $request->busca != "") {
            $pagination->orWhere("name","like","%$request->busca%");
        }

        return view("admin.users.index", ["list"=>$pagination->paginate(3)]);
    }

  

    
    public function edit(User $user){

        $posts = Post::where("user_id",$user->id)->paginate(5);

        return view("admin.users.form",["data"=>$user, 
                                        "posts"=>$posts]);
    }

 

    

}
