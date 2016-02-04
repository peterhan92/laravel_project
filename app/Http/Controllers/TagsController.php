<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tag;

class TagsController extends Controller
{
    public function show(Tag $tag)
    {
    	$posts = $tag->posts;

    	return view('posts.index', compact('posts'));
    }

}
