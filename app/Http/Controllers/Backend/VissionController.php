<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Model\vission;

class VissionController extends Controller
{
   public function view(){
   	  $data['countVission'] = Vission::count();
    	$data['allData'] = Vission::all();
    	return view('backend.vission.view-vission',$data);
    }
     public function add(){
     	return view('backend.vission.add-vission');
     }
     public function store(Request $request){
	     $data = new Vission();
	     $data->title = $request->title;
	     $data->created_by = Auth::user()->id;
	      if ($request->file('image')) {
	     	$file = $request->file('image');
	     	$filename =date('YmdHi').$file->getClientOriginalName();
	     	$file->move(public_path('upload/vission_images'), $filename);
	        $data['image']= $filename;
	     }
	     $data->save();
	     return redirect()->route('vissions.view')->with('success','Data inserted successfully');
     }
     public function edit($id){
     	$editdata = Vission::find($id);
     	return view('backend.vission.edit-vission',compact('editdata'));
     }

     public function update(Request $request,$id){
     	   $data = Vission::find($id);
     	   $data->title = $request->title;
     	   $data->updated_by = Auth::user()->id;
	      if ($request->file('image')) {
	     	$file = $request->file('image');
	        @unlink(public_path('upload/vission_images/'.$data->image));
	     	$filename =date('YmdHi').$file->getClientOriginalName();
	     	$file->move(public_path('upload/vission_images'), $filename);
	        $data['image']= $filename;
	     }
	     $data->save();
	     return redirect()->route('vissions.view')->with('success','Data updated successfully');

     }
     public function delete($id){
      $vission = vission::find($id);
      if (file_exists('public/upload/vission_images/' . $vission->image) AND ! empty($vission->image)) {
          unlink('public/upload/vission_images/' . $vission->image);
       } 
       $vission->delete(); 
        return redirect()->route('vissions.view')->with('success','Data deleted successfully');
     }
}
