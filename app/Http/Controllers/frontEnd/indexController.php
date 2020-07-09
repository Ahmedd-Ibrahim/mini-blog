<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\model\about;
use App\model\clinet;
use App\model\contact;
use App\model\Services;
use App\model\Portfolio;
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
        // clients
        $clinet = clinet::select('name_'.LaravelLocalization::getCurrentLocale().' as name','number')->first();
        //  = clinet::select('name_'.LaravelLocalization::getCurrentLocale().' as name','number')->first();
        $projects = clinet::where('id',2)->select('name_'.LaravelLocalization::getCurrentLocale().' as name','number')->first();
        $awrd = clinet::where('id',4)->select('name_'.LaravelLocalization::getCurrentLocale().' as name','number')->first();
        $experience = clinet::where('id',3)->select('name_'.LaravelLocalization::getCurrentLocale().' as name','number')->first();
        // end clinets
        return view('frontend.index',compact('posts','slidePosts','clinet','awrd', 'experience','projects'));

    }

    public function services(){
       $services = Services::select('id',
       'name_'.LaravelLocalization::getCurrentLocale().' as name')
       ->get();
        return view('frontend.services',['services'=>$services]);
    }
    public function portfolio(){
        $portfolio = Portfolio::select(
            'name_'.LaravelLocalization::getCurrentLocale().' as name',
            'discription_'.LaravelLocalization::getCurrentLocale().' as dicription_',
            'photo',
            'category'
        )->get();

        return view('frontend.portfolio',compact('portfolio'));
    }
    public function future(){
        return view('frontend.future');
    }

    public function contact(){
        $email = contact::get('email')->first();
        $adress = contact::get('address_'.LaravelLocalization::getCurrentLocale().' as adress')->first();
        $phone = contact::get('phone')->first();
        return view('frontend.contact',compact('email','adress','phone'));
    }

    public function about(){
        $about = about::select('name_'.LaravelLocalization::getCurrentLocale().' as name',
        'discription_'.LaravelLocalization::getCurrentLocale().' as discription',
        'photo'
    )->get();
        return view('frontend.about', compact('about'));
    }
}
