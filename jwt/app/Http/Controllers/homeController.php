<?php

namespace App\Http\Controllers;
use App\Models\homeModel;

use Illuminate\Http\Request;

class homeController extends Controller
{
    // show home page
    public function showhomePage(){
        return view('home');
    }
    // add home about section
    public function addhomeaboutInfo(Request $request){
        $about_title=$request->input('about_title');
        $about_des=$request->input('about_des');

        $result=homeModel::insert([
            'about_title'=>$about_title,
            'about_des'=>$about_des
        ]);
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

     // update home about section
     public function updatehomeaboutInfo(Request $request){
        $id=$request->input('id');
        $about_title=$request->input('about_title');
        $about_des=$request->input('about_des');

        $result=homeModel::where('id','=',$id)->update([
            'about_title'=>$about_title,
            'about_des'=>$about_des
        ]);
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

    // delete about section in home page
    public function deletehomeaboutInfo(Request $request){
        $id=$request->input('id');
        $result=homeModel::where('id','=',$id)->delete();
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

    // show all about info from home page
    public function showallaboutInfo(Request $request){
        $id=$request->input('id');
        $result=homeModel::where('id','=',$id)->get();
        return $result;
    }
    // show all information orderBy
    public function showallaboutDetails(){
        $result=homeModel::where('id','desc')->get();
        return $result;
    }

}
