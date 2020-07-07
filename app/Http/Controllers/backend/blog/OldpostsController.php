<?php

namespace App\Http\Controllers\backend\blog;

use App\Http\Controllers\Controller;
use App\model\posts_en;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class postsController extends Controller
{
    //
    public function index(){   // show categories

        $postss = posts_en::get();
        return view('backend.posts.posts',['postss'=>$postss]);
    }

    public function mangePosts(){

    $postss = posts_en::get();
    return view('backend.posts.mangePosts',['postss'=>$postss]);
    }
       // insert categories
       public function save(Request $request){
        // valdete data before insert
        // | string |unique:category,name'

        $valedator = validator::make($request->all(),[
            'title' => 'required | min:5 ',
            'content' => 'required | min:5 ',
            'photo' => 'required |mimes:jpeg,jpg,png,gif| max:10000',

        ]);

        // insert data and redirect


        $full_name = time().'.'. $request->photo->getClientOriginalExtension();
        $move_to = 'imgs/posts/';
        $full_photo = $move_to.$full_name;
       $request->photo->move($move_to,$full_name);

        posts_en::create([

            'title'      => $request->title,
            'content'    => $request->content,
            'photo'      =>   $full_photo ,
        ]);
        return redirect('admin/posts')->with(['added'=> 'success added Your Category']);
            }
            // Delete

public function delete($posts_id){

    $del = posts_en::find($posts_id);
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

    $edit = posts_en::find($posts_id);

    if(!$edit){
        return redirect('admin/posts');
    }
  return view('backend/posts/edit',['edit'=>$edit]);
}

############ update post ########

public function update(Request $request , $posts_id ){

    $myCat = posts_en::find($posts_id);

    $valedator = $request->validate([
        'title' => 'required | min:3 ',
        'content' => 'required | min:3 ',
        'photo' => 'required ',

    ]);

    $full_name = time().'.'. $request->photo->getClientOriginalExtension();
    $move_to = 'imgs/posts/';
    $full_photo = $move_to.$full_name;
   $request->photo->move($move_to,$full_name);

    if(!$myCat){
        return redirect()->back();
    }
    $myCat->update([
            'title'      => $request->title,
            'content'    => $request->content,
            'photo'      =>   $full_photo ,
    ]);

    return redirect('admin/mangePosts')->with(['updated'=>'Your Category have been Updated']);
    }




}
