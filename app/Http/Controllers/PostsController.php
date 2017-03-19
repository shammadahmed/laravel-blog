<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth')->except(['index', 'show']);
	}

    public function index()
    {
    	$posts = Post::latest()->filter(request(['month', 'year']))->get();

    	return view('posts.index', compact('posts', 'archives'));
    }

    public function show(Post $post)
    {
    	return view('posts.show', compact('post'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store()
    {
    	$this->validate(request(), [
			'title' => 'required',
			'body' => 'required'
    	]);

    	auth()->user()->posts()->save(new Post(request(['title', 'body'])));

		return redirect('/');
    }
}
