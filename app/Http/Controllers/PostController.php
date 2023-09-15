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
    public function edit($id){
        $post = Post::findOrFail($id);
        return view('post/edit', ['post' => $post]);
    }
    public function storeEdit(Request $request, int $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('post/index')->with('status', 'Blog Post Form Data Has Been inserted');
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->back()->with('success','sssss');
    }
}
