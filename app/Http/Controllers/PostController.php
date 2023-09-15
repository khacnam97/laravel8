<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data = Post::all();
        return view('post/index', ['data' => $data]);
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('post/index')->with('status', 'Blog Post Form Data Has Been inserted');
    }

    public function create(){
        return view('post/create');
    }
}
