<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $pencarian = Post::latest();

        if(Request('pencarian')){
            $pencarian->where('title','like','%' . Request('pencarian') . '%')
                      ->orWhere('body','like','%' . Request('pencarian'). '%');
        }

        return view('blog', [
        "aktif" => "blog",
        "posts" => $pencarian->get()
    ]);
    }

    public function show(Post $id)
    {
        return view('post', [
            "title" => "Single Post",
            "posts" => $id, 
            "aktif" => "blog"
        ]);
    }
}
