<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('blogs.index', [
            'posts' => Post::latest()->paginate(6),
        ]);
    }

    public function show(Post $post){
        return view('blogs.show', [
            'post' => $post
        ]);
    }

    public function destroy($id){
        $post = Post::find($id);
        $post->delete();

       return back();
    }

}
