<?php

namespace App\Http\Controllers\backend\portfolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Portfolio;
use Illuminate\Support\Facades\Validator;



class portfolioController extends Controller
{
    //
    public function index(){   // show categories
        $Portfolios = Portfolio::get();
        return view('backend.portfolio.portfolio',['Portfolios'=>$Portfolios]);
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

        Portfolio::create([
            'name'           => $request->name,
            'discription'  => $request->discription,
            'photo' => $request->photo
        ]);
        return redirect('admin/Portfolio')->with(['added'=> 'success added Your Category']);
            }
            // Delete
public function delete($Portfolio_id){

    $del = Portfolio::find($Portfolio_id);
    if(!$del){
        return redirect('admin/Portfolio')->withErrors(['delete-error'=>'You trying to delete uknown Portfolio']);
    }
    $del->delete();
    return redirect('admin/Portfolio')->with(['success'=>'Success Deleted Category']);
}

// edit
######## Edit Portfolio ######
public function edit($Portfolio_id)
{

    $edit = Portfolio::find($Portfolio_id);

    if(!$edit){
        return redirect('admin/Portfolio');
    }
  return view('backend/Portfolio/edit',['edit'=>$edit]);
}

############ update Portfolio ########

public function update(Request $request , $Portfolio_id ){

    $myCat = Portfolio::find($Portfolio_id);

    if(!$myCat){
        return redirect()->back();
    }
    $myCat->update($request->all());

    return redirect('admin/Portfolio')->with(['updated'=>'Your Category have been Updated']);
    }






}
