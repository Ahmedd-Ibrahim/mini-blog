<?php

namespace App\Http\Controllers\backend\contact;

use App\Http\Controllers\Controller;
use App\model\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class contactController extends Controller
{
    //
    public function index(){   // show contact
        $contacts = contact::get();
        return view('backend.contact.contact',['contacts'=>$contacts]);
    }

       // insert categories
       public function save(Request $request){

        // valdete data before insert

        $valedator = $request->validate([
            'address_en' => 'required | min:3 ',
            'address_ar' => 'required | min:3 ',
            'email' => 'required | min:3 ',
            'phone' => 'required ',
        ]);

        // insert data and redirect
        contact::create([
            'address_en'           => $request->address_en,
            'address_ar'           => $request->address_ar,
            'email'                => $request->email,
            'phone'                => $request->phone
        ]);
        return redirect('admin/contact')->with(['added'=> 'success added Your Category']);
            }
            // Delete
public function delete($contact_id){

    $del = contact::find($contact_id);
    if(!$del){
        return redirect('admin/contact')->withErrors(['delete-error'=>'You trying to delete uknown contact']);
    }
    $del->delete();
    return redirect('admin/contact')->with(['success'=>'Success Deleted Category']);
}

// edit
######## Edit contact ######
public function edit($contact_id)
{

    $edit = contact::find($contact_id);

    if(!$edit){
        return redirect('admin/contact');
    }
  return view('backend/contact/edit',['edit'=>$edit]);
}

############ update contact ########

public function update(Request $request , $contact_id ){

    $myCat = contact::find($contact_id);

    $valedator = $request->validate([
        'address_en' => 'required | min:3 ',
        'address_ar' => 'required | min:3 ',
        'email' => 'required | min:3 ',
        'phone' => 'required ',
    ]);
    if(!$myCat){
        return redirect()->back();
    }
    $myCat->update($request->all());

    return redirect('admin/contact')->with(['updated'=>'Your Category have been Updated']);
    }

}
