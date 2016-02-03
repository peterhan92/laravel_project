<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Http\Requests\PostsRequest;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    # Create a new posts controller instance
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index', 'show']);
    }

	# display all posts ordered by update
    public function index() 
    {
    	$posts = Post::latest('Updated_at')->get();

    	return view('posts.index', compact('posts'));
    }

    # display single post
    public function show($id) 
    {
    	$post = Post::findorfail($id);
        $user = User::find($post->user_id);

    	return view('posts.show', compact('post', 'id', 'user'));
    }

    # display create post page
    public function create() 
    {
        $tags = Tag::lists('name', 'id');

    	return view('posts.create', compact('tags'));
    }

    # save each post
    public function store(PostsRequest $request)
    {
        $post = Auth::user()->posts()->create($request->all());

        $post->tags()->attach($request->input('tag_list'));

        session()->flash('flash_message', 'Your post has been created!');

    	return redirect('posts');
    }

    # edit each post
    public function edit($id)
    {
    	$post = Post::findorfail($id);

        $tags = Tag::lists('name', 'id');

    	return view('posts.edit', compact('post', 'tags'));
    }

    # update edited post
    public function update($id, PostsRequest $request)
    {
    	$post = Post::findorfail($id);

    	$post->update($request->all());
        
        $post->tags()->sync($request->input('tag_list'));

        session()->flash('flash_message', 'Your post has been updated!');

    	return redirect('posts');
    }
    # delete post
    public function destroy($id)
    {
        $post = Post::findorfail($id);

        $post->delete();

        return redirect('posts');
    }

}
