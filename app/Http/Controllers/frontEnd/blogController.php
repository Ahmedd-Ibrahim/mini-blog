<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class blogController extends Controller
{
    //
    public function blog(){
        return view('frontend.blog');
    }
}
