<?php

namespace App\Http\Controllers\backend\about;

use App\Http\Controllers\Controller;
use App\model\about;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class aboutController extends Controller
{
    //
    //
    public function index(){   // show about

        $abouts = about::get();
        return view('backend.about.about',['abouts'=>$abouts]);
    }
    public function add(){   // show about

        $abouts = about::get();
        return view('backend.about.add',['abouts'=>$abouts]);
    }

       // insert categories
       public function save(Request $request){

        // valdete data before insert


        $valedator = Validator::make($request->all(),[
            'name' => 'required | min:3 ',
            'discription' => 'required | min:3 ',
            'photo' => 'required ',
        ]);
        if($valedator -> fails()){


            return redirect()->back()->withErrors($valedator)->withInputs($request->all());
        }
        // insert data and redirect

        $full_name = time().'.'. $request->photo->getClientOriginalExtension();
        $move_to = 'imgs/about/';
        $full_photo = $move_to.$full_name;
       $request->photo->move($move_to,$full_name);
        about::create([
            'name'           => $request->name,
            'discription'  => $request->discription,
            'photo' => $full_photo
        ]);
        return redirect('admin/about')->with(['added'=> 'success added Your Category']);
            }
            // Delete
public function delete($about_id){

    $del = about::find($about_id);
    if(!$del){
        return redirect('admin/about')->withErrors(['delete-error'=>'You trying to delete uknown about']);
    }
    $del->delete();
    return redirect('admin/about')->with(['success'=>'Success Deleted Category']);
}

// edit
######## Edit about ######
public function edit($about_id)
{

    $edit = about::find($about_id);

    if(!$edit){
        return redirect('admin/about');
    }
  return view('backend/about/edit',['edit'=>$edit]);
}

############ update about ########

public function update(Request $request , $about_id ){

    $myCat = about::find($about_id);

    if(!$myCat){
        return redirect()->back();
    }

$full_name = time().'.'. $request->photo->getClientOriginalExtension();
$move_to = 'imgs/about/';
$full_photo = $move_to.$full_name;

$request->photo->move($move_to,$full_name);
$myCat->update([
    'name'           => $request->name,
    'discription'  => $request->discription,
    'photo' =>     $full_photo
]);
return redirect('admin/about')->with(['updated'=> 'success added Your about info']);
    }

}
