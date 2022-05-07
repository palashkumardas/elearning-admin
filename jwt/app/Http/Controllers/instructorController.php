<?php

namespace App\Http\Controllers;
use App\Models\instructorModel;

use Illuminate\Http\Request;

class instructorController extends Controller
{
    // show instructor detail page
    public function showinstructorPage(){
        return view('instructor');
    }
    // add instructor name and id
    public function addInstructorInfo(Request $request){
        $name=$request->input('name');
        $instructor_id=$request->input('instructor_id');
        $email=$request->input('email');
        $phone=$request->input('phone');
        $username=$request->input('username');
        $designation=$request->input('designation');
        $password=$request->input('password');
        $confirmpass=$request->input('confirmpass');
        $facebooklink=$request->input('facebooklink');
        $twiterlink=$request->input('twiterlink');
        $youtubechannel=$request->input('youtubechannel');


        $result=instructorModel::insert([
            'name'=>$name,
            'instructor_id'=>$instructor_id,
            'email'=>$email,
            'phone'=>$phone,
            'username'=>$username,
            'designation'=>$designation,
            'password'=>$password,
            'confirmpass'=>$confirmpass,
            'facebooklink'=>$facebooklink,
            'twiterlink'=>$twiterlink,
            'youtubechannel'=>$youtubechannel
        ]);
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    // update assignment information
    public function updateInstructorInfo(Request $request){
        $id=$request->input('id');
        $name=$request->input('name');
        $instructor_id=$request->input('instructor_id');
        $email=$request->input('email');
        $phone=$request->input('phone');
        $username=$request->input('username');
        $designation=$request->input('designation');
        $password=$request->input('password');
        $confirmpass=$request->input('confirmpass');
        $facebooklink=$request->input('facebooklink');
        $twiterlink=$request->input('twiterlink');
        $youtubechannel=$request->input('youtubechannel');
        $result=instructorModel::where('id','=',$id)->update([
            'name'=>$name,
            'instructor_id'=>$instructor_id,
            'email'=>$email,
            'phone'=>$phone,
            'username'=>$username,
            'designation'=>$designation,
            'password'=>$password,
            'confirmpass'=>$confirmpass,
            'facebooklink'=>$facebooklink,
            'twiterlink'=>$twiterlink,
            'youtubechannel'=>$youtubechannel
        ]);
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    // delete assignment information
    public function deleteInstructorInfo(Request $request){
        $id=$request->input('id');
        $result=instructorModel::where('id','=',$id)->delete();
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }
    // get all assignment information
    public function getInstructorDetails(Request $request){
        $id=$request->input('id');
        $result=instructorModel::where('id','=',$id)->get();
        return $result;
    }

    // get assignment information orderBy
    public function getInstructorInfo(){
        $result=instructorModel::orderBy('id','desc')->get();
        return $result;
    }

}
