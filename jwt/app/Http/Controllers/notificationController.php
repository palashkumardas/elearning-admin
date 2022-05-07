<?php

namespace App\Http\Controllers;
use App\Models\notificationModel;

use Illuminate\Http\Request;

class notificationController extends Controller
{
    // show page
    public function showNotifipage(){
        return view('notification');
    }
     // get all notificaton data
     public function getNotificationDetails(Request $request){
        $id=$request->input('id');
        $result=notificationModel::where('id','=',$id)->get();
        return $result;
    }
    // get notificaton data
    public function getNotification(){
        $result=notificationModel::orderBy('id','desc')->get();
        return $result;
    }
    // Add notificaton information
    public function addNotification(Request $request){

       $notifititle=$request->input('title');
       $notifides=$request->input('des');
       $notifistatus=$request->input('status');
       date_default_timezone_set("Asia/Dhaka");
       $timeDate= date("Y-m-d h:i:sa");

       $result=notificationModel::insert([
        'notifi_title'=>$notifititle,
        'notifi_des'=>$notifides,
        'notifi_status'=>$notifistatus,
        'notifi_datetime'=>$timeDate
       ]);
       if($result==true){
           return 1;
       }
       else{
           return 0;
       }
    }

    // delete notification data
    public function deleteNotification(Request $request){
        $id=$request->input('id');
        $result=notificationModel::where('id','=',$id)->delete();
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    // update notification data
    public function updateNotification(Request $request){
        $id=$request->input('id');
        $notifititle=$request->input('title');
        $notifides=$request->input('des');
        $notifistatus=$request->input('status');
        date_default_timezone_set("Asia/Dhaka");
        $timeDate= date("Y-m-d h:i:sa");

        $result=notificationModel::where('id','=',$id)->update([
         'notifi_title'=>$notifititle,
         'notifi_des'=>$notifides,
         'notifi_status'=>$notifistatus,
         'notifi_datetime'=>$timeDate
        ]);
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

}
