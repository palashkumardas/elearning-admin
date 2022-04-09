<?php

namespace App\Http\Controllers;
use App\Models\assignmentModel;

use Illuminate\Http\Request;


class AssignmentController extends Controller
{
    // show assignment page
    public function showAssignmentPage(){
        return view('assignment');
    }

    // add assignment information
    public function addAssignmentInfo(Request $request){
        $course_title=$request->input('course_title');
        $course_id=$request->input('course_id');
        $cat_title=$request->input('cat_title');
        $assignment_details=$request->input('assignment_details');
        $submitted_link=$request->input('submitted_link');
        $grade=$request->input('grade');
        date_default_timezone_set("Asia/Dhaka");
        $submitted_date=date("d-m-Y");

        $result=assignmentModel::insert([
            'course_title'=>$course_title,
            'course_id'=>$course_id,
            'cat_title'=>$cat_title,
            'assignment_details'=>$assignment_details,
            'submitted_link'=>$submitted_link,
            'grade'=>$grade,
            'submitted_date'=>$submitted_date
        ]);
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    // update assignment information
    public function updateAssignmentInfo(Request $request){
        $id=$request->input('id');
        $course_title=$request->input('course_title');
        $course_id=$request->input('course_id');
        $cat_title=$request->input('cat_title');
        $assignment_details=$request->input('assignment_details');
        $submitted_link=$request->input('submitted_link');
        $grade=$request->input('grade');
        $submitted_date=$request->input('submitted_date');

        $result=assignmentModel::where('id','=',$id)->update([
            'course_title'=>$course_title,
            'course_id'=>$course_id,
            'cat_title'=>$cat_title,
            'assignment_details'=>$assignment_details,
            'submitted_link'=>$submitted_link,
            'grade'=>$grade,
            'submitted_date'=>$submitted_date
        ]);
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    // delete assignment information
    public function deleteAssignmentInfo(Request $request){
        $id=$request->input('id');
        $result=assignmentModel::where('id','=',$id)->delete();
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }
    // get all assignment information
    public function getAssignmentDetails(Request $request){
        $id=$request->input('id');
        $result=assignmentModel::where('id','=',$id)->get();
        return $result;
    }

    // get assignment information orderBy
    public function getAssignmentInfo(){
        $result=assignmentModel::orderBy('id','desc')->get();
        return $result;
    }

}
