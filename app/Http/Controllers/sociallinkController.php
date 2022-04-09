<?php

namespace App\Http\Controllers;
use App\Models\socialModel;

use Illuminate\Http\Request;

class sociallinkController extends Controller
{
    // show social page
    public function showSocialPage(){
        return view('social');
    }
      // add more social section
      public function addsocialInfo(Request $request){
        $facebook_link=$request->input('facebook_link');
        $twitter_link=$request->input('twitter_link');
        $youtube_link=$request->input('youtube_link');
        $linkedin_link=$request->input('linkedin_link');
        $result=socialModel::insert([
            'facebook_link'=>$facebook_link,
            'twitter_link'=>$twitter_link,
            'youtube_link'=>$youtube_link,
            'linkedin_link'=>$linkedin_link
        ]);
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

     // update  social section
     public function updatesocialInfo(Request $request){
        $id=$request->input('id');
        $facebook_link=$request->input('facebook_link');
        $twitter_link=$request->input('twitter_link');
        $youtube_link=$request->input('youtube_link');
        $linkedin_link=$request->input('linkedin_link');
        $result=socialModel::where('id','=',$id)->update([
            'facebook_link'=>$facebook_link,
            'twitter_link'=>$twitter_link,
            'youtube_link'=>$youtube_link,
            'linkedin_link'=>$linkedin_link
        ]);
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

    // delete social section
    public function deletesocialInfo(Request $request){
        $id=$request->input('id');
        $result=socialModel::where('id','=',$id)->delete();
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

    // show all social info
    public function showallsocialInfo(Request $request){
        $id=$request->input('id');
        $result=socialModel::where('id','=',$id)->get();
        return $result;
    }
    // show all information orderBy
    public function showallsocialDetails(){
        $result=socialModel::where('id','desc')->get();
        return $result;
    }
}
