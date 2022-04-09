<?php

namespace App\Http\Controllers;
use App\Models\fileModel;

use Illuminate\Http\Request;

class fileController extends Controller
{
    // show file page
    public function showfilePage(){
        return view('file');
    }

    // add file information
    public function addfileInfo(Request $request){
        $course_title=$request->input('course_title');
        $file_title=$request->input('file_title');
        $file_status=$request->input('file_status');
        $file_link=$request->input('file_link');
        date_default_timezone_set("Asia/Dhaka");
        $file_datetime=date("d-m-Y");

        $result=fileModel::insert([
            'course_title'=>$course_title,
            'file_title'=>$file_title,
            'file_status'=>$file_status,
            'file_link'=>$file_link,
            'file_datetime'=>$file_datetime
        ]);
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    // update file information
    public function updatefileInfo(Request $request){
        $id=$request->input('id');
        $course_title=$request->input('course_title');
        $file_title=$request->input('file_title');
        $file_status=$request->input('file_status');
        $file_link=$request->input('file_link');
        date_default_timezone_set("Asia/Dhaka");
        $file_datetime=date("d-m-Y");

        $result=fileModel::where('id','=',$id)->update([
            'course_title'=>$course_title,
            'file_title'=>$file_title,
            'file_status'=>$file_status,
            'file_link'=>$file_link,
            'file_datetime'=>$file_datetime
        ]);
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }
    // delete file information
    public function deletefileInfo(Request $request){
        $id=$request->input('id');
        $result=fileModel::where('id','=',$id)->delete();
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    // get all file informaton
    public function getallFileInfo(Request $request){
        $id=$request->input('id');
        $result=fileModel::where('id','=',$id)->get();
        return $result;
    }

    // get all information orderby
    public function getallFileDetauls(){
        $result=fileModel::orderBy('id','desc')->get();
        return $result;
    }

}
