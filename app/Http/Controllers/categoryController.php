<?php

namespace App\Http\Controllers;
use App\Models\categoryModel;

use Illuminate\Http\Request;

class categoryController extends Controller
{
    // show category page
    public function showCategoryPage(){
        return view('category');
    }

    // add category information
    public function addCategoryInfo(Request $request){
        $title=$request->input('cat_title');
        $status=$request->input('cat_status');
        $catId=rand();
        $result=categoryModel::insert([
            'cat_title'=>$title,
            'cat_status'=>$status,
            'cat_id'=>$catId
        ]);
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }
    // get all category information
    public function getallCategory(Request $request){
        $id=$request->input('id');
        $result=categoryModel::where('id','=',$id)->get();
        return $result;
    }
    // get category orderby
    public function getCategoryInfo(){
        $result=categoryModel::orderBy('id','desc')->get();
        return $result;
    }
    // delete category
    public function deleteCategory(Request $request){
        $id=$request->input('id');
        $result=categoryModel::where('id','=',$id)->delete();
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }
    // update category
    public function updateCategory(Request $request){
        $id=$request->input('id');
        $title=$request->input('cat_title');
        $status=$request->input('cat_status');
        $catId=rand();
        $result=categoryModel::where('id','=',$id)->update([
            'cat_title'=>$title,
            'cat_status'=>$status,
            'cat_id'=>$catId
        ]);
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }
}
