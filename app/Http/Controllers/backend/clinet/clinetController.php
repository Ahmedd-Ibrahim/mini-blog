<?php

namespace App\Http\Controllers\backend\clinet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\clinet;
use Clinet as GlobalClinet;

class clinetController extends Controller
{
    //
    public function index(){
        $clinets = clinet::get();
        return view('backend.clinet.index', compact('clinets'));
    }
    public function edit($id){
        $clinet = clinet::find($id);
        return view('backend.clinet.edit', compact('clinet'));
    }
    public function update(Request $request, $id){

        $clinet = clinet::find($id);

        $valedator = $request->validate([
            'number' => 'required  ',
            'name_en' => 'required',
            'name_ar' => 'required'
        ]);
        if(!$clinet){
            return redirect()->back();
        }
        $clinet->update([
            'number' => $request->number,
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar
        ]);

        return redirect('admin/clinet')->with(['updated'=>'Your clinet have been Updated']);
        }
}
