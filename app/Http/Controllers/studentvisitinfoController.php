<?php

namespace App\Http\Controllers;
use App\Models\studentvisitModel;

use Illuminate\Http\Request;

class studentvisitinfoController extends Controller
{
    // show student login page
    public function showStudentVisitPage(){
        return view('studentvisit');
    }
    // add student login info
    public function addstudentInfo(){

        $UserIP=$_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $visit_date=date("d-m-Y" );
        $visit_time= date("h:i:sa");
        $result=studentvisitModel::insert([
            'visitor_ip'=>$UserIP,
            'visit_date'=>$visit_date,
            'visit_time'=>$visit_time

        ]);
        return $result;
    }
    // get all login info
    public function showallData(Request $request){
        $id=$request->input('id');
        $result=studentvisitModel::where('id','=',$id);
        return $result;
    }

    // get all login info orderBy
    public function getstudentInfo(){
        $result=studentvisitModel::orderBy('id','desc')->get();
        return $request;
    }


}
