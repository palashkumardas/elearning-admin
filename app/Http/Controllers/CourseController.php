<?php

namespace App\Http\Controllers;
use App\Models\courseModel;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    // show course page
    public function showCoursePage(){
        return view('course');
    }
    // add course info
    public function addCourseInfo(Request $request){
        $course_title=$request->input('course_title');
        $course_type=$request->input('course_type');
        $course_id=$request->input('course_id');
        $price=$request-input('price');
        $special_price=$request->input('special_price');
        $course_level=$request->input('course_level');
        $course_feature=$request->input('course_feature');
        $instructor_id=$request->input('instructor_id');
        $total_time=$request->input('total_time');

        $result=courseModel::insert([
            'course_title'=>$course_title,
            'course_type'=>$course_type,
            'course_id'=>$course_id,
            'price'=>$price,
            'special_price'=>$special_price,
            'course_level'=>$course_level,
            'course_feature'=>$course_feature,
            'instructor_id'=>$instructor_id,
            'total_time'=>$total_time
        ]);
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    // update course information
    public function updateCourseInfo(Request $request){
        $id=$request->input('id');
        $course_title=$request->input('course_title');
        $course_type=$request->input('course_type');
        $course_id=$request->input('course_id');
        $price=$request-input('price');
        $special_price=$request->input('special_price');
        $course_level=$request->input('course_level');
        $course_feature=$request->input('course_feature');
        $instructor_id=$request->input('instructor_id');
        $total_time=$request->input('total_time');

        $result=courseModel::where('id','=',$id)->update([
            'course_title'=>$course_title,
            'course_type'=>$course_type,
            'course_id'=>$course_id,
            'price'=>$price,
            'special_price'=>$special_price,
            'course_level'=>$course_level,
            'course_feature'=>$course_feature,
            'instructor_id'=>$instructor_id,
            'total_time'=>$total_time
        ]);
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    // delete course information
    public function deleteCourseInfo(Request $request){
        $id=$request->input('id');
        $result=courseModel::where('id','=',$id)->delete();
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }

    }

    // get all course information
    public function getCourseDetails(Request $request){
        $id=$request->input('id');
        $result=courseModel::where('id','=',$id)->get();
        return $result;
    }

    // get all course information by order
    public function getCourseInfo(){
        $result=courseModel::orderBy('id','desc')->get();
        return $result;
    }
}
