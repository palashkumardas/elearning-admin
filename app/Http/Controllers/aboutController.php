<?php

namespace App\Http\Controllers;
use App\Models\aboutModel;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    // show about page
    public function showmoreaboutPage(){
        return view('about');
    }
    // add more about section
    public function addaboutInfo(Request $request){
        $about_title=$request->input('about_title');
        $about_des=$request->input('about_des');
        date_default_timezone_set("Asia/Dhaka");
        $about_date=date("d-m-Y");
        $result=aboutModel::insert([
            'about_title'=>$about_title,
            'about_des'=>$about_des,
            'about_date'=>$about_date
        ]);
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

     // update  about section
     public function updateaboutInfo(Request $request){
        $id=$request->input('id');
        $about_title=$request->input('about_title');
        $about_des=$request->input('about_des');
        date_default_timezone_set("Asia/Dhaka");
        $about_date=date("d-m-Y");

        $result=aboutModel::where('id','=',$id)->update([
            'about_title'=>$about_title,
            'about_des'=>$about_des,
            'about_date'=>$about_date
        ]);
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

    // delete about section
    public function deleteaboutInfo(Request $request){
        $id=$request->input('id');
        $result=aboutModel::where('id','=',$id)->delete();
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

    // show all about info
    public function showallaboutInfo(Request $request){
        $id=$request->input('id');
        $result=aboutModel::where('id','=',$id)->get();
        return $result;
    }
    // show all information orderBy
    public function showallaboutDetails(){
        $result=aboutModel::where('id','desc')->get();
        return $result;
    }
}
