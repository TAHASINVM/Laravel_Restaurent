<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;

class AdminController extends Controller
{
    public function user(){
        $data=User::all();
        return view('admin.user',compact('data'));
    }
    public function deleteuser($id){
        $data=User::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function foodmenu(){
        $data=Food::all();
        return view('admin.foodmenu',compact('data'));
    }
    public function deletemenu($id){
        $data=Food::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updatemenu($id){
        $data=Food::find($id);
        return view("admin.updatemenu",compact('data'));
    }
    public function update(Request $request , $id){
        $data=Food::find($id);
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('foodimage',$imagename);
            $data->image=$imagename;
            $data->title=$request->title;
            $data->price=$request->price;
            $data->description=$request->description;
            $data->save();
            return redirect()->back();
    }
    public function upload(Request $request){
        $data= new Food;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('foodimage',$imagename);
            $data->image=$imagename;
            $data->title=$request->title;
            $data->price=$request->price;
            $data->description=$request->description;
            $data->save();

        return redirect()->back();
    }
}
