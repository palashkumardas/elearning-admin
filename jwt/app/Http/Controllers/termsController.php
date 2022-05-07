<?php

namespace App\Http\Controllers;
use App\Models\termsModel;

use Illuminate\Http\Request;

class termsController extends Controller
{
     // show terms page
     public function showtermsPage(){
        return view('terms');
    }
    // add terms section
    public function addtermsInfo(Request $request){
        $terms_title=$request->input('terms_title');
        $terms_des=$request->input('terms_des');
        date_default_timezone_set("Asia/Dhaka");
        $terms_date=date("d-m-Y");
        $result=termsModel::insert([
            'terms_title'=>$terms_title,
            'terms_des'=>$terms_des,
            'terms_date'=>$terms_date
        ]);
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

     // update  terms section
     public function updatetermsInfo(Request $request){
        $id=$request->input('id');
        $terms_title=$request->input('terms_title');
        $terms_des=$request->input('terms_des');
        date_default_timezone_set("Asia/Dhaka");
        $terms_date=date("d-m-Y");

        $result=termsModel::where('id','=',$id)->update([
            'terms_title'=>$terms_title,
            'terms_des'=>$terms_des,
            'terms_date'=>$terms_date
        ]);
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

    // delete terms section
    public function deletetermsInfo(Request $request){
        $id=$request->input('id');
        $result=termsModel::where('id','=',$id)->delete();
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

    // show all terms info
    public function showalltermsInfo(Request $request){
        $id=$request->input('id');
        $result=termsModel::where('id','=',$id)->get();
        return $result;
    }
    // show all information orderBy
    public function showalltermsDetails(){
        $result=termsModel::where('id','desc')->get();
        return $result;
    }
}
