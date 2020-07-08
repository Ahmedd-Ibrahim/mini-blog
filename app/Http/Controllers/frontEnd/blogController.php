<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
class blogController extends Controller
{
    //

    public function blog(){
        $posts = Post::paginate(10);
        $sildePosts = Post::paginate(3);
        return view('frontend.blog')->withPosts($posts);
        // return view('frontend.blog')->compact('posts','sildePosts');
    }
    public function post(){

        return view('frontend.post');
    }
    public function get($slug) {
    	// fetch from the DB based on slug
        $post = Post::where('slug', '=', $slug)->first();
        $last = Post::orderBy('id', 'desc')->paginate(1)->first();
    	// return the view and pass in the post object
    	return view('frontend.post',compact('post','last'));
    }
}
