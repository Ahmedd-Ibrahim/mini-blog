<?php

namespace App\Http\Controllers\backend\blog;

use App\Http\Controllers\Controller;
use App\model\posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class postsController extends Controller
{
    //
    public function index(){   // show categories

        $postss = posts::get();
        return view('backend.posts.posts',['postss'=>$postss]);
    }

    public function mangePosts(){

    $postss = posts::get();
    return view('backend.posts.mangePosts',['postss'=>$postss]);
    }
       // insert categories
       public function save(Request $request){
        // valdete data before insert
        // | string |unique:category,name'

        $valedator = Validator::make($request->all(),[
            'title' => 'required | min:3 ',
            'content' => 'required | min:3 ',

        ]);
        if($valedator -> fails()){
            return redirect()->back()->withErrors($valedator)->withInputs($request->all());
        }
        // insert data and redirect


        posts::create([
            'title'           => $request->title,
            'content'  => $request->content,
        ]);
        return redirect('admin/posts')->with(['added'=> 'success added Your Category']);
            }
            // Delete

public function delete($posts_id){

    $del = posts::find($posts_id);
    if(!$del){
        return redirect('admin/posts')->withErrors(['delete-error'=>'You trying to delete uknown posts']);
    }
    $del->delete();
    return redirect('admin/posts')->with(['success'=>'Success Deleted Category']);
}

// edit
######## Edit posts ######

public function edit($posts_id)
{

    $edit = posts::find($posts_id);

    if(!$edit){
        return redirect('admin/posts');
    }
  return view('backend/posts/edit',['edit'=>$edit]);
}

############ update post ########

public function update(Request $request , $posts_id ){

    $myCat = posts::find($posts_id);

    if(!$myCat){
        return redirect()->back();
    }
    $myCat->update($request->all());

    return redirect('admin/mangePosts')->with(['updated'=>'Your Category have been Updated']);
    }




}
