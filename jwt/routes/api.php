<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\fileController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\instructorController;
use App\Http\Controllers\notificationController;
use App\Http\Controllers\privacyController;
use App\Http\Controllers\purchaseController;
use App\Http\Controllers\siteinfoController;
use App\Http\Controllers\sociallinkController;
use App\Http\Controllers\studentvisitinfoController;
use App\Http\Controllers\teachervisitinfoController;
use App\Http\Controllers\termsController;
use App\Http\Controllers\visitorController;

//visitor page
Route::controller(visitorController::class)->group(function(){
    Route::post('adduserInfo','adduserInfo');
    Route::get('getuserDetails','getuserDetails');
    Route::get('getuserInfo','getuserInfo');
});
//terms page
Route::controller(termsController::class)->group(function(){
    Route::post('addtermsInfo','addtermsInfo');
    Route::post('updatetermsInfo','updatetermsInfo');
    Route::post('deletetermsInfo','deletetermsInfo');
    Route::get('showalltermsInfo','showalltermsInfo');
    Route::get('showalltermsDetails','showalltermsDetails');
});
// teacher visit information page
Route::controller(teachervisitinfoController::class)->group(function(){
    Route::post('addteacherInfo','addteacherInfo');
    Route::get('getallData','getallData');
    Route::get('getteacherInfo','getteacherInfo');
});
//student visit information page
Route::controller(studentvisitinfoController::class)->group(function(){
    Route::post('addstudentInfo','addstudentInfo');
    Route::get('showallData','showallData');
    Route::get('getstudentInfo','getstudentInfo');
});
//social link page
Route::controller(sociallinkController::class)->group(function(){
    Route::post('addsocialInfo','addsocialInfo');
    Route::post('updatesocialInfo','updatesocialInfo');
    Route::post('deletesocialInfo','deletesocialInfo');
    Route::get('showallsocialInfo','showallsocialInfo');
    Route::get('showallsocialDetails','showallsocialDetails');
});

//site information page
Route::controller(siteinfoController::class)->group(function(){
    Route::post('addSiteinfo','addSiteinfo');
    Route::post('updateSiteinfo','updateSiteinfo');
    Route::post('deleteSiteinfo','deleteSiteinfo');
    Route::get('getSiteInfo','getSiteInfo');
    Route::get('getsiteDetails','getsiteDetails');
});
// purchase page
Route::controller(purchaseController::class)->group(function(){
    Route::post('addpurchaseInfo','addpurchaseInfo');
    Route::post('updatepurchaseInfo','updatepurchaseInfo');
    Route::post('deletepurchaseInfo','deletepurchaseInfo');
    Route::get('showpurchaseInfo','showpurchaseInfo');
    Route::get('showpurchaseDetails','showpurchaseDetails');
    Route::post('addrefundInfo','addrefundInfo');
    Route::post('updaterefundInfo','updaterefundInfo');
    Route::post('deleterefundInfo','deleterefundInfo');
    Route::get('showrefundInfo','showrefundInfo');
    Route::get('showrefundDetails','showrefundDetails');
});

// privacy page
Route::controller(privacyController::class)->group(function(){
    Route::post('addprivacyInfo','addprivacyInfo');
    Route::post('updateprivacyInfo','updateprivacyInfo');
    Route::post('deleteprivacyInfo','deleteprivacyInfo');
    Route::get('showallprivacyInfo','showallprivacyInfo');
    Route::get('showallprivacyDetails','showallprivacyDetails');
});
// notification page
Route::controller(notificationController::class)->group(function(){
    Route::post('addNotification','addNotification');
    Route::post('deleteNotification','deleteNotification');
    Route::post('updateNotification','updateNotification');
    Route::get('getNotification','getNotification');
    Route::get('getNotificationDetails','getNotificationDetails');
});
// about page
Route::controller(aboutController::class)->group(function(){
    Route::post('addaboutInfo','addaboutInfo');
    Route::post('updateaboutInfo','updateaboutInfo');
    Route::post('deleteaboutInfo','deleteaboutInfo');
    Route::get('showallaboutInfo','showallaboutInfo');
    Route::get('showallaboutDetails','showallaboutDetails');
});
// assignment page
Route::controller(AssignmentController::class)->group(function(){
    Route::post('addAssignmentInfo','addAssignmentInfo');
    Route::post('updateAssignmentInfo','updateAssignmentInfo');
    Route::post('deleteAssignmentInfo','deleteAssignmentInfo');
    Route::get('getAssignmentDetails','getAssignmentDetails');
    Route::get('getAssignmentInfo','getAssignmentInfo');
});
// home page
Route::controller(homeController::class)->group(function(){
    Route::post('addhomeaboutInfo','addhomeaboutInfo');
    Route::post('updatehomeaboutInfo','updatehomeaboutInfo');
    Route::post('deletehomeaboutInfo','deletehomeaboutInfo');
    Route::get('showallaboutInfo','showallaboutInfo');
    Route::get('showallaboutDetails','showallaboutDetails');
});
// contact page
Route::controller(contactController::class)->group(function(){
    Route::post('addcontactInfo','addcontactInfo');
    Route::get('getContactInfo','getContactInfo');
    Route::get('getContactDetails','getContactDetails');
});
// file page
Route::controller(fileController::class)->group(function(){
    Route::post('addfileInfo','addfileInfo');
    Route::post('updatefileInfo','updatefileInfo');
    Route::post('deletefileInfo','deletefileInfo');
    Route::get('getallFileInfo','getallFileInfo');
    Route::get('getallFileDetails','getallFileDetails');
});
//instructor page
Route::controller(instructorController::class)->group(function(){
    Route::post('addInstructorInfo','addInstructorInfo');
    Route::post('updateInstructorInfo','updateInstructorInfo');
    Route::post('deleteInstructorInfo'.'deleteInstructorInfo');
    Route::get('getInstructorDetails','getInstructorDetails');
    Route::get('getInstructorInfo','getInstructorInfo');
});
// jwt authentication
Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
    Route::get('me', 'me');

});

