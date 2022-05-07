<?php

namespace App\Http\Controllers;
use App\Models\purchaseModel;

use Illuminate\Http\Request;

class purchaseController extends Controller
{
    // show refund page
    public function showrefundPage(){
        return view('refund');
    }

     // add purchase section
     public function addpurchaseInfo(Request $request){
        $purchase_title=$request->input('purchase_title');
        $purchase_des=$request->input('purchase_des');

        $result=purchaseModel::insert([
            'purchase_title'=>$purchase_title,
            'purchase_des'=>$purchase_des
        ]);
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

     // update purchase section
     public function updatepurchaseInfo(Request $request){
        $id=$request->input('id');
        $purchase_title=$request->input('purchase_title');
        $purchase_des=$request->input('purchase_des');

        $result=purchaseModel::where('id','=',$id)->update([
            'purchase_title'=>$purchase_title,
            'purchase_des'=>$purchase_des
        ]);
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

    // delete purchase section
    public function deletepurchaseInfo(Request $request){
        $id=$request->input('id');
        $result=purchaseModel::where('id','=',$id)->delete();
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

    // show all purchase information
    public function showpurchaseInfo(Request $request){
        $id=$request->input('id');
        $result=purchaseModel::where('id','=',$id)->get();
        return $result;
    }
    // show all information orderBy
    public function showpurchaseDetails(){
        $result=purchaseModel::where('id','desc')->get();
        return $result;
    }
    // add refund information
    public function addrefundInfo(Request $request){
        $refund_title=$request->input('refund_title');
        $refund_des=$request->input('refund_des');

        $result=purchaseModel::insert([
            'refund_title'=>$refund_title,
            'refund_des'=>$refund_des
        ]);
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

     // update refund section
     public function updaterefundInfo(Request $request){
        $id=$request->input('id');
        $refund_title=$request->input('refund_title');
        $refund_des=$request->input('refund_des');

        $result=purchaseModel::where('id','=',$id)->update([
            'refund_title'=>$refund_title,
            'refund_des'=>$refund_des
        ]);
        if($result==true){
            return 1;
        }else{
            return 0;

        }

    }


    // show all refund information
    public function showrefundInfo(Request $request){
        $id=$request->input('id');
        $result=purchaseModel::where('id','=',$id)->get();
        return $result;
    }
    // show all information orderBy
    public function showrefundDetails(){
        $result=purchaseModel::where('id','desc')->get();
        return $result;
    }

    // delete refund information
    public function deleterefundInfo(Request $request){
        $id=$request->input('id');
        $result=purchaseModel::where('id','=',$id)->delete();
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

}
