<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts'=> $post->getPaginateByLimit(1)]);
    }
    
    
    public function show(Post $post)
    {
        return view('post/show')->with(['post' => $post]);
        #dd($post);#dd関数は変数の中身の確認ができる
    }
    
    public function create()
    {
        return view('posts/create');
    }
}
