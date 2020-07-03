<?php

namespace App\Http\Controllers\backend\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    //
    public function pages(){
        return view('backend.pages.pages');
    }
}
