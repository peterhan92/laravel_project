<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Http\Requests\PostsRequest;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
	# display all posts
    public function index() 
    {
    	
    	$posts = Post::latest('published_at')->published()->get();

    	return view('posts.index')->with('posts', $posts);
    }

    # display single post
    public function show($id) 
    {
    	$post = Post::findorfail($id);

    	return view('posts.show', compact('post'));
    }

    # display create post page
    public function create() 
    {
    	return view('posts.create');
    }

    # save each post
    public function store(PostsRequest $request) 
    {
    	Auth::user()->posts()->save(new Post($request->all()));

    	return redirect('posts');
    }

    # edit each post
    public function edit($id)
    {
    	$post = Post::findorfail($id);
    	return view('posts.edit', compact('post'));
    }

    # update edited post
    public function update($id, PostRequest $request)
    {
    	$post = Post::findorfail($id);

    	$post->update($request->all());

    	return redirect('posts');
    }

}
