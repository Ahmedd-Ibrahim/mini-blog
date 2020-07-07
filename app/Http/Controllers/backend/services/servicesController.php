<?php

namespace App\Http\Controllers\backend\services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Services;
use Illuminate\Support\Facades\Validator;

class servicesController extends Controller
{
    //
    public function index(){   // show main page
        $servicess = Services::get();
        return view('backend.services.services',['servicess'=>$servicess]);
    }
    //
    public function add(){   // Add new Services
        $servicess = Services::get();
        return view('backend.services.add',['servicess'=>$servicess]);
    }

       // insert categories
       public function save(Request $request){
        // valdete data before insert
        // | string |unique:category,name'

        $valedator = $request->validate([
            'name_en' => 'required |min:5 ',
            'name_ar' => 'required  ',
            'discription_en' => 'required ',
            'discription_ar' => 'required  ',
            'photo' => 'required ',
        ]);

        $full_name = time().'.'. $request->photo->getClientOriginalExtension();
        $move_to = 'imgs/services/';
        $full_photo = $move_to.$full_name;

       $request->photo->move($move_to,$full_name);
        services::create([
            'name_en'           => $request->name_en,
            'name_ar'           => $request->name_ar,
            'discription_ar'  => $request->discription_ar,
            'discription_en'  => $request->discription_en,
            'photo' =>     $full_photo
        ]);
        return redirect('admin/services')->with(['added'=> 'success added Your Service']);
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

    $valedator = $request->validate([
        'name_en' => 'required |min:5 ',
        'name_ar' => 'required  ',
        'discription_en' => 'required ',
        'discription_ar' => 'required  ',
        'photo' => 'required ',
    ]);

    if(!$myCat){
        return redirect()->back();
    }

$full_name = time().'.'. $request->photo->getClientOriginalExtension();
$move_to = 'imgs/services/';
$full_photo = $move_to.$full_name;

$request->photo->move($move_to,$full_name);
$myCat->update([
    'name_en'           => $request->name_en,
    'name_ar'           => $request->name_ar,
    'discription_en'  => $request->discription_en,
    'discription_ar'  => $request->discription_ar,
    'photo' =>     $full_photo
]);
return redirect('admin/services')->with(['updated'=> 'success added Your Category']);
}

}
