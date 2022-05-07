<?php

namespace App\Http\Controllers;
use App\Models\contactModel;

use Illuminate\Http\Request;

class contactController extends Controller
{
    // show contact page
    public function showContactPage(){
        return view('contact');
    }

    // add contact information
    public function addcontactInfo(Request $request){
        $contact_title=$request->input('contact_title');
        $contact_email=$request->input('contact_email');
        $contact_subject=$request->input('contact_subject');
        $contact_msg=$request->input('contact_msg');
        date_default_timezone_set("Asia/Dhaka");
        $contact_datetime=date("Y-m-d h:i:sa");

        $result=contactModel::insert([
            'contact_title'=>$contact_title,
            'contact_email'=>$contact_email,
            'contact_subject'=>$contact_subject,
            'contact_msg'=>$contact_msg,
            'contact_datetime'=>$contact_datetime
        ]);
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }
    // get all contact information
    public function getContactInfo(Request $request){
        $id=$request->input('id');
        $result=contactModel::where('id','=',$id)->get();
        return $result;
    }
    // get all contact information by orderby
    public function getContactDetails(){
        $result=contactModel::orderBy('id','desc')->get();
        return $result;
    }
}
