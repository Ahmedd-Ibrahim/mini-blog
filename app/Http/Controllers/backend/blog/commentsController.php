<?php

namespace App\Http\Controllers\backend\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class commentsController extends Controller
{
    //
    public function index(){
        return view('backend.comments.comments');
    }
}
