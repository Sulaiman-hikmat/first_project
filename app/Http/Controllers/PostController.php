<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{ 
    public function showpost(){
        return view('post');
    }
    public function createpost(Request $request){
        $post = Post::create([
            'title' =>$request->title,
            'image' =>$request->image,
            'content' =>$request->content,
        ]);

        return view('post');
    }
}
