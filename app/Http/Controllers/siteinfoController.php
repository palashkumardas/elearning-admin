<?php

namespace App\Http\Controllers;
use App\Models\siteinfoModel;

use Illuminate\Http\Request;

class siteinfoController extends Controller
{
    // show siteinfo page
    public function showSiteinfoPage(){
        return view('siteinfo');
    }
    // add site information
    public function addSiteinfo(Request $request){
        $site_title=$request->input('site_title');
        $site_herotitle=$request->input('site_herotitle');
        $site_herosubtitile=$request->input('site_herosubtitile');
        $site_address=$request->input('site_address');
        $site_mobile=$request->input('site_mobile');
        $site_email=$request->input('site_email');
        $site_weblink=$request->input('site_weblink');

        $result=siteinfoModel::insert([
            'site_title'=>$site_title,
            'site_herotitle'=>$site_herotitle,
            'site_herosubtitile'=>$site_herosubtitile,
            'site_address'=>$site_address,
            'site_mobile'=>$site_mobile,
            'site_email'=>$site_email,
            'site_weblink'=>$site_weblink
        ]);
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

     // update site information
     public function updateSiteinfo(Request $request){
        $id=$request->input('id');
        $site_title=$request->input('site_title');
        $site_herotitle=$request->input('site_herotitle');
        $site_herosubtitile=$request->input('site_herosubtitile');
        $site_address=$request->input('site_address');
        $site_mobile=$request->input('site_mobile');
        $site_email=$request->input('site_email');
        $site_weblink=$request->input('site_weblink');

        $result=siteinfoModel::where('id','=',$id)->update([
            'site_title'=>$site_title,
            'site_herotitle'=>$site_herotitle,
            'site_herosubtitile'=>$site_herosubtitile,
            'site_address'=>$site_address,
            'site_mobile'=>$site_mobile,
            'site_email'=>$site_email,
            'site_weblink'=>$site_weblink
        ]);
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

    // delete site information
    public function deleteSiteinfo(Request $request){
        $id=$request->input('id');
        $result=siteinfoModel::where('id','=',$id)->delete();
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }
    // get all site information
    public function getSiteInfo(Request $request){
        $id=$request->input('id');
        $result=siteinfoModel::where('id','=',$id)->get();
        return $result;
    }
    // get site information by order
    public function getsiteDetails(){
        $result=siteinfoModel::orderBy('id','desc')->get();
        return $result;
    }
}
