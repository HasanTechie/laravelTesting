<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        return view('post/index');
    }
    public function show()
    {
        return view('post/show');
    }
    public function create()
    {
        return view('post/create');
    }
    public function store()
    {
//        dd(\request()->all());
//
        Post::create(request(['title','body']));

//        Post::create([
//            'title' => request('title'),
//            'body' => request('body')
//        ]);
//        $post = new Post;
//        $post->title = \request('title');
//        $post->body = \request('body');
//        $post->save();
//
        return redirect('/');

        //create new post using request data
        //store it to the dB
        //redirect to homepage
    }

}
