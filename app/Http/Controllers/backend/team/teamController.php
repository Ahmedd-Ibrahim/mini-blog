<?php

namespace App\Http\Controllers\backend\team;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\team;
use Illuminate\Support\Facades\Validator;


class teamController extends Controller
{
    //
    public function index(){   // show categories
        $teams = team::get();
        return view('backend.team.team',['teams'=>$teams]);
    }


       // insert categories
       public function save(Request $request){
        // valdete data before insert

        $valedator = Validator::make($request->all(),[
            'name' => 'required ',
            'title'=> 'required',
            'social'=> 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($valedator -> fails()){
            return dd($valedator->fails());

            return redirect()->back()->withErrors($valedator)->withInputs($request->all());
        }
        // insert data and redirect

        $full_name = time().'.'. $request->photo->getClientOriginalExtension();
        $move_to = 'imgs/team/';

        $full_photo = $move_to.$full_name;

       $request->photo->move($move_to,$full_name);

        team::create([
            'name'             => $request->name,
            'title'            => $request->title,
            'social'           => $request->social,
            'photo'             => $full_photo,
        ]);
        return redirect('admin/team')->with(['added'=> 'success added Your Category']);
            }

            // Delete
public function delete($team_id){

    $del = team::find($team_id);
    if(!$del){
        return redirect('admin/team')->withErrors(['delete-error'=>'You trying to delete uknown team']);
    }
    $del->delete();
    return redirect('admin/team')->with(['success'=>'Success Deleted Category']);
}

// edit
######## Edit team ######
public function edit($team_id)
{
    $edit = team::find($team_id);

    if(!$edit){
        return redirect('admin/team');
    }
  return view('backend/team/edit',['edit'=>$edit]);
}

############ update team ########

public function update(Request $request , $id ){

    $myCat = team::find($id);

    if(!$myCat){
        return redirect()->back();
    }
    $myCat->update($request->all());

    return redirect('admin/team')->with(['updated'=>'Your Category have been Updated']);
    }


}
