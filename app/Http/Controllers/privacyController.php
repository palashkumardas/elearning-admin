<?php

namespace App\Http\Controllers;
use App\Models\privacyModel;

use Illuminate\Http\Request;

class privacyController extends Controller
{
     // show privacy page
     public function showprivacyPage(){
        return view('privacy');
    }
    // add privacy section
    public function addprivacyInfo(Request $request){
        $privacy_title=$request->input('privacy_title');
        $privacy_des=$request->input('privacy_des');
        date_default_timezone_set("Asia/Dhaka");
        $privacy_date=date("d-m-Y");
        $result=privacyModel::insert([
            'privacy_title'=>$privacy_title,
            'privacy_des'=>$privacy_des,
            'privacy_date'=>$privacy_date
        ]);
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

     // update  privacy section
     public function updateprivacyInfo(Request $request){
        $id=$request->input('id');
        $privacy_title=$request->input('privacy_title');
        $privacy_des=$request->input('privacy_des');
        date_default_timezone_set("Asia/Dhaka");
        $privacy_date=date("d-m-Y");

        $result=privacyModel::where('id','=',$id)->update([
            'privacy_title'=>$privacy_title,
            'privacy_des'=>$privacy_des,
            'privacy_date'=>$privacy_date
        ]);
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

    // delete privacy section
    public function deleteprivacyInfo(Request $request){
        $id=$request->input('id');
        $result=privacyModel::where('id','=',$id)->delete();
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

    // show all privacy info
    public function showallprivacyInfo(Request $request){
        $id=$request->input('id');
        $result=privacyModel::where('id','=',$id)->get();
        return $result;
    }
    // show all information orderBy
    public function showallprivacyDetails(){
        $result=privacyModel::where('id','desc')->get();
        return $result;
    }
}
