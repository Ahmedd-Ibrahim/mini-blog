<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\model\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\model\team;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class indexController extends Controller
{
    //
    public function homePage(){
        $team = team::get();
        return view('frontend.index',['team'=>$team]);
        // return view('frontend.tester',['team'=>$team]);
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
