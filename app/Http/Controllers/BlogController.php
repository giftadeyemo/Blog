<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    public function getSingle($slug) {

    // fetch from the DB baased on slug

    	$post = Post::where('slug', '=', $slug)->first();
    // return the view and pass in the post object
    	return view('blog.single')->withPost($post);

    }
}
