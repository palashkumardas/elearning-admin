<?php

namespace App\Http\Controllers;
use App\Models\teachervisitModel;

use Illuminate\Http\Request;

class teachervisitinfoController extends Controller
{
    // show teacher login page
    public function showTeacherPage(){
        return view('teachervisit');
    }
    // add teacher login info
    public function addteacherInfo(){

        $UserIP=$_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $visit_date=date("d-m-Y" );
        $visit_time= date("h:i:sa");
        $result=teachervisitModel::insert([
            'visitor_ip'=>$UserIP,
            'visit_date'=>$visit_date,
            'visit_time'=>$visit_time

        ]);
        return $result;
    }
    // get all login info
    public function getallData(Request $request){
        $id=$request->input('id');
        $result=teachervisitModel::where('id','=',$id);
        return $result;
    }
    // get login info orderby
    public function getteacherInfo(){
        $result=teachervisitModel::orderBy('id','desc');
        return $result;
    }
}
