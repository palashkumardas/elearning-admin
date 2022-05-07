<?php

namespace App\Http\Controllers;
use App\Models\visitorModel;

use Illuminate\Http\Request;

class visitorController extends Controller
{
    //show visitor page
    public function showVisitorPage(){
        return view('visitor');
    }
    // add user information
   public function adduserInfo(){

        $UserIP=$_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $visit_date=date("d-m-Y" );
        $visit_time= date("h:i:sa");
        $result=visitorModel::insert([
            'visitor_ip'=>$UserIP,
            'visit_date'=>$visit_date,
            'visit_time'=>$visit_time

        ]);
        return $result;
    }

    // get visitor information
    public function getuserDetails(Request $request){
        $id= $request->input('id');
        $result=visitorModel::where('id','=',$id)->get();
        return $result;
    }
    // get visitor information orderby desc
    public function getuserInfo(){
        $result=visitorModel::orderBy('id','desc')->get();
        return $result;
    }

}
