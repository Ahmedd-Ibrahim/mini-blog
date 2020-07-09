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
    public function add(){   // Add new portfolio
        $Portfolios = Portfolio::get();
        return view('backend.portfolio.add',['Portfolios'=>$Portfolios]);
    }

       // insert categories
       public function save(Request $request){
        // valdete data before insert
        $valedator = $request->validate([
            'name_en' => 'required | min:3 ',
            'discription_en' => 'required | min:3 ',
            'name_ar' => 'required | min:3 ',
            'discription_ar' => 'required | min:3 ',
            'photo' => 'required ',
            'link' => 'required ',
            'category' => 'required ',
        ]);

        // insert data and redirect
// return dd($request);
        $full_name = time().'.'. $request->photo->getClientOriginalExtension();
        $move_to = 'imgs/portfolio/';
        $full_photo = $move_to.$full_name;
       $request->photo->move($move_to,$full_name);
        Portfolio::create([
            'name_en'           => $request->name_en,
            'discription_en'  => $request->discription_en,
            'name_ar'           => $request->name_ar,
            'discription_ar'  => $request->discription_ar,
            'photo' =>   $full_photo ,
            'link' =>   $request->link ,
            'category' => $request->category
        ]);
        return redirect('admin/portfolio')->with(['added'=> 'success added Your Category']);
            }
            // Delete
public function delete($Portfolio_id){

    $del = Portfolio::find($Portfolio_id);
    if(!$del){
        return redirect('admin/portfolio')->withErrors(['delete-error'=>'You trying to delete uknown Portfolio']);
    }
    $del->delete();
    return redirect('admin/portfolio')->with(['success'=>'Success Deleted this Portfolio']);
}

// edit
######## Edit Portfolio ######
public function edit($Portfolio_id)
{

    $edit = Portfolio::find($Portfolio_id);

    if(!$edit){
        return redirect('admin/portfolio');
    }
  return view('backend/portfolio/edit',['edit'=>$edit]);
}

############ update Portfolio ########

public function update(Request $request , $Portfolio_id ){

    $myCat = portfolio::find($Portfolio_id);

    $valedator = $request->validate([
        'name_en' => 'required | min:3 ',
        'discription_en' => 'required | min:3 ',
        'name_ar' => 'required | min:3 ',
        'discription_ar' => 'required | min:3 ',
        'photo' => 'required ',
        'link' => 'required ',
        'category' => 'required'
    ]);

    if(!$myCat){
        return redirect()->back();
    }

$full_name = time().'.'. $request->photo->getClientOriginalExtension();
$move_to = 'imgs/portfolio/';
$full_photo = $move_to.$full_name;

$request->photo->move($move_to,$full_name);
$myCat->update([
    'name_en'         => $request->name_en,
    'discription_en'  => $request->discription_en,
    'name_ar'         => $request->name_ar,
    'discription_ar'  => $request->discription_ar,
    'link'  =>           $request->link,
    'photo' =>           $full_photo,
    'category' => $request->category
]);
return redirect('admin/portfolio')->with(['updated'=> 'success added Your portfolio']);
    }






}
