<?php

namespace App\Http\Controllers;
use App\Models\usersModel;

use Illuminate\Http\Request;

class usersController extends Controller
{
    // show create user information page
    public function showusersPage(){
        return view('users');
    }

    // add new user
    public function addNewUser(Request $request){
        $user_name=$request->input('user_name');
        $user_email=$request->input('user_email');
        $user_mobile=$request->input('user_mobile');
        $user_role=$request->input('user_role');
        $user_pass=$request->input('user_pass');
        $user_cpass=$request->input('user_cpass');
        $user_status=$request->input('user_status');
        $user_img=$request->input('user_img');
        $user_date=$request->input('user_date');

        $result=usersModel::insert([
            'user_name'=>$user_name,
            'user_email'=>$user_email,
            'user_mobile'=>$user_mobile,
            'user_role'=>$user_role,
            'user_pass'=>$user_pass,
            'user_cpass'=>$user_cpass,
            'user_status'=>$user_status,
            'user_img'=>$user_img,
            'user_date'=>$user_date
        ]);
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

    // update new user
    public function updateNewUser(Request $request){
        $id=$request->input('id');
        $user_name=$request->input('user_name');
        $user_email=$request->input('user_email');
        $user_mobile=$request->input('user_mobile');
        $user_role=$request->input('user_role');
        $user_pass=$request->input('user_pass');
        $user_cpass=$request->input('user_cpass');
        $user_status=$request->input('user_status');
        $user_img=$request->input('user_img');
        $user_date=$request->input('user_date');

        $result=usersModel::where('id','=',$id)->update([
            'user_name'=>$user_name,
            'user_email'=>$user_email,
            'user_mobile'=>$user_mobile,
            'user_role'=>$user_role,
            'user_pass'=>$user_pass,
            'user_cpass'=>$user_cpass,
            'user_status'=>$user_status,
            'user_img'=>$user_img,
            'user_date'=>$user_date
        ]);
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

    // delete new users information
    public function deleteNewUsers(Request $request){
        $id=$request->input('id');
        $result=usersModel::where('id','=',$id)->delete();
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

    // get all new users information
    public function getNewUsersInfo(Request $request){
        $id=$request->input('id');
        $result=usersModel::where('id','=',$id)->get();
        return $result;
    }

    // get all new users information
    public function getNewUserDetails(){
        $result=usersModel::orderBy('id','desc')->get();
        return $result;
    }
}
