<?php

namespace App\Http\Controllers;
use App\Models\subcategoryModel;

use Illuminate\Http\Request;

class subcategoryController extends Controller
{
    // show subcategory page
    public function showSubcategoryPage(){
        return view('subcategory');
    }

    // add subcategory information
    public function addSubcategoryInfo(Request $request){
        $category=$request->input('cat_title');
        $subcategory=$request->input('content_title');
        date_default_timezone_set('Asia/Dhaka');
        $date=date('d-m-Y');

        $result=subcategoryModel::insert([
            'cat_title'=>$category,
            'content_title'=>$subcategory,
            'content_time'=>$date
        ]);
        return $result;
    }

    // get all subcategory information
    public function getallSubcategory(Request $request){
        $id=$request->input('id');
        $result=subcategoryModel::where('id','=',$id)->get();
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }
    // get all subcategory by orderby
    public function getallSubcategoryInfo(){
        $result=subcategoryModel::orderBy('id','desc')->get();
        return $result;
    }
    // delete subcategory info
    public function subCategoryDelete(Request $request){
        $id=$request->input('id');
        $result=subcategoryModel::where('id','=',$id)->delete();
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }
    // update subcategory info
    public function subCategoryUpdate(Request $request){
        $id=$request->input('id');
        $category=$request->input('cat_title');
        $subcategory=$request->input('content_title');
        date_default_timezone_set('Asia/Dhaka');
        $date=date('d-m-Y');

        $result=subcategoryModel::update([
            'cat_title'=>$category,
            'content_title'=>$subcategory,
            'content_time'=>$date
        ]);
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }


}
