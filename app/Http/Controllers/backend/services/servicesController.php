<?php

namespace App\Http\Controllers\backend\services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Services;
use Illuminate\Support\Facades\Validator;

class servicesController extends Controller
{
    //
    public function index(){   // show categories
        $servicess = Services::get();
        return view('backend.services.services',['servicess'=>$servicess]);
    }


       // insert categories
       public function save(Request $request){
        // valdete data before insert
        // | string |unique:category,name'

        $valedator = Validator::make($request->all(),[
            'name' => 'required | min:3 ',
            'discription' => 'required | min:3 ',
            'photo' => 'required ',
        ]);
        if($valedator -> fails()){


            return redirect()->back()->withErrors($valedator)->withInputs($request->all());
        }
        // insert data and redirect

        services::create([
            'name'           => $request->name,
            'discription'  => $request->discription,
            'photo' => $request->photo
        ]);
        return redirect('admin/services')->with(['added'=> 'success added Your Category']);
            }
            // Delete
public function delete($services_id){

    $del = services::find($services_id);
    if(!$del){
        return redirect('admin/services')->withErrors(['delete-error'=>'You trying to delete uknown services']);
    }
    $del->delete();
    return redirect('admin/services')->with(['success'=>'Success Deleted Category']);
}

// edit
######## Edit services ######

public function edit($services_id)
{

    $edit = services::find($services_id);

    if(!$edit){
        return redirect('admin/services');
    }
  return view('backend/services/edit',['edit'=>$edit]);
}

############ update services ########

public function update(Request $request , $services_id ){

    $myCat = services::find($services_id);

    if(!$myCat){
        return redirect()->back();
    }
    $myCat->update($request->all());

    return redirect('admin/services')->with(['updated'=>'Your Category have been Updated']);
    }

}