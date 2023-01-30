<?php

namespace App\Http\Controllers;

use App\Models\image;
use Illuminate\Http\Request;

class vanController extends Controller
{
    //
    public function index(){
        $ards=image::get();
        return view('welcome',compact('ards'));

    }
    public function create(Request $request){
        $validate=$request->validate([
            'file'=>'required|mimes:jpg,png,jpeg|max:1000'
        ]);
        if($validate){
           $file=$request->file('file');
           $extension=$file->getClientOriginalExtension();
           $file_name=time().'.'.$extension;
           $file->move('storage/pics',$file_name);
            image::create([
            'file'=>$file_name,
            'name'=>$request->name
            ]);
        }
        return redirect()->back();

    }
}