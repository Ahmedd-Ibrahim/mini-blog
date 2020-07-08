<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\model\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use App\Post;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class indexController extends Controller
{
    //
    public function homePage(){

        
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        $slidePosts = Post::orderBy('id','desc')->paginate(3);
        return view('frontend.index',compact('posts','slidePosts'));

    }

    public function services(){
       $services = Services::select('id',
       'name_'.LaravelLocalization::getCurrentLocale().' as name')
       ->get();
        return view('frontend.services',['services'=>$services]);
    }
    public function portfolio(){
        return view('frontend.portfolio');
    }
    public function future(){
        return view('frontend.future');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function about(){


        return view('frontend.about');
    }
}
