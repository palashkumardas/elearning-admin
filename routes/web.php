<?php
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\visitorController;
use App\Http\Controllers\studentvisitinfoController;
use App\Http\Controllers\teachervisitinfoController;
use App\Http\Controllers\notificationController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\fileController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\purchaseController;
use App\Http\Controllers\siteinfoController;
use App\Http\Controllers\subcategoryController;
use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Route;

// dashboard index page
Route::get('/',[dashboardController::class,'showDashboardPage']);

// user information
Route::get('/showVisitorPage',[visitorController::class,'showVisitorPage']);
Route::get('/getuserDetails',[visitorController::class,'getuserDetails']);
Route::get('/getuserInfo',[visitorController::class,'getuserInfo']);

// student login info
Route::get('/showStudentVisitPage',[studentvisitinfoController::class,'showStudentVisitPage']);
Route::get('/showallData',[studentvisitinfoController::class,'showallData']);
Route::get('/getstudentInfo',[studentvisitinfoController::class,'getstudentInfo']);

// teacher login info
Route::get('/showTeacherPage',[teachervisitinfoController::class,'showTeacherPage']);
Route::get('/getallData',[teachervisitinfoController::class,'getallData']);
Route::get('/getteacherInfo',[teachervisitinfoController::class,'getteacherInfo']);

// notification for admin
Route::get('/showNotifipage',[notificationController::class,'showNotifipage']);
Route::get('/getNotification',[notificationController::class,'getNotification']);
Route::get('/getNotificationDetails',[notificationController::class,'getNotificationDetails']);
Route::post('/addNotification',[notificationController::class,'addNotification']);
Route::post('/deleteNotification',[notificationController::class,'deleteNotification']);
Route::post('/updateNotification',[notificationController::class,'updateNotification']);

// category information
Route::get('/showCategoryPage',[categoryController::class,'showCategoryPage']);
Route::post('/addCategoryInfo',[categoryController::class,'addCategoryInfo']);
Route::get('/getallCategory',[categoryController::class,'getallCategory']);
Route::get('/getCategoryInfo',[categoryController::class,'getCategoryInfo']);
Route::post('/deleteCategory',[categoryController::class,'deleteCategory']);
Route::post('/updateCategory',[categoryController::class,'updateCategory']);

// assignment information
Route::get('/showAssignmentPage',[AssignmentController::class,'showAssignmentPage']);
Route::post('/addAssignmentInfo',[AssignmentController::class,'addAssignmentInfo']);
Route::get('/getAssignmentDetails',[AssignmentController::class,'getAssignmentDetails']);
Route::get('/getAssignmentInfo',[AssignmentController::class,'getAssignmentInfo']);
Route::post('/deleteAssignmentInfo',[AssignmentController::class,'deleteAssignmentInfo']);
Route::post('/updateAssignmentInfo',[AssignmentController::class,'updateAssignmentInfo']);

// contact information
Route::get('/showContactPage',[contactController::class,'showContactPage']);
Route::post('/addcontactInfo',[contactController::class,'addcontactInfo']);
Route::get('/getContactInfo',[contactController::class,'getContactInfo']);
Route::get('/getContactDetails',[contactController::class,'getContactDetails']);

// course information
Route::get('/showCoursePage',[CourseController::class,'showCoursePage']);
Route::post('/addCourseInfo',[CourseController::class,'addCourseInfo']);
Route::post('/updateCourseInfo',[CourseController::class,'updateCourseInfo']);
Route::post('/deleteCourseInfo',[CourseController::class,'deleteCourseInfo']);
Route::get('/getCourseDetails',[CourseController::class,'getCourseDetails']);
Route::get('/getCourseInfo',[CourseController::class,'getCourseInfo']);

// file information
Route::get('/showfilePage',[fileController::class,'showfilePage']);
Route::post('/addfileInfo',[fileController::class,'addfileInfo']);
Route::post('/updatefileInfo',[fileController::class,'updatefileInfo']);
Route::post('/deletefileInfo',[fileController::class,'deletefileInfo']);
Route::get('/getallFileInfo',[fileController::class,'getallFileInfo']);
Route::get('/getallFileDetauls',[fileController::class,'getallFileDetauls']);

// home information
Route::get('/showhomePage',[homeController::class,'showhomePage']);
Route::post('/addhomeaboutInfo',[homeController::class,'addhomeaboutInfo']);
Route::post('/updatehomeaboutInfo',[homeController::class,'updatehomeaboutInfo']);
Route::post('/deletehomeaboutInfo',[homeController::class,'deletehomeaboutInfo']);
Route::get('/showallaboutInfo',[homeController::class,'showallaboutInfo']);
Route::get('/showallaboutDetails',[homeController::class,'showallaboutDetails']);

// purchase information
Route::get('/showrefundPage',[purchaseController::class,'showrefundPage']);
Route::post('/addpurchaseInfo',[purchaseController::class,'addpurchaseInfo']);
Route::post('/updatepurchaseInfo',[purchaseController::class,'updatepurchaseInfo']);
Route::post('/deletepurchaseInfo',[purchaseController::class,'deletepurchaseInfo']);
Route::get('/showpurchaseInfo',[purchaseController::class,'showpurchaseInfo']);
Route::get('/showpurchaseDetails',[purchaseController::class,'showpurchaseDetails']);

// refund information
Route::post('/addrefundInfo',[purchaseController::class,'addrefundInfo']);
Route::post('/updaterefundInfo',[purchaseController::class,'updaterefundInfo']);
Route::post('/deleterefundInfo',[purchaseController::class,'deleterefundInfo']);
Route::get('/showrefundInfo',[purchaseController::class,'showrefundInfo']);
Route::get('/showrefundDetails',[purchaseController::class,'showrefundDetails']);

// siteinfo information
Route::get('/showSiteinfoPage',[siteinfoController::class,'showSiteinfoPage']);
Route::post('/addSiteinfo',[siteinfoController::class,'addSiteinfo']);
Route::post('/updateSiteinfo',[siteinfoController::class,'updateSiteinfo']);
Route::post('/deleteSiteinfo',[siteinfoController::class,'deleteSiteinfo']);
Route::get('/getSiteInfo',[siteinfoController::class,'getSiteInfo']);
Route::get('/getsiteDetails',[siteinfoController::class,'getsiteDetails']);

// subcategory information
Route::get('/showSubcategoryPage',[subcategoryController::class,'showSubcategoryPage']);
Route::post('/addSubcategoryInfo',[subcategoryController::class,'addSubcategoryInfo']);
Route::post('/subCategoryUpdate',[subcategoryController::class,'subCategoryUpdate']);
Route::post('/subCategoryDelete',[subcategoryController::class,'subCategoryDelete']);
Route::get('/getallSubcategory',[subcategoryController::class,'getallSubcategory']);
Route::get('/getallSubcategoryInfo',[subcategoryController::class,'getallSubcategoryInfo']);

//  New users information
Route::get('/showusersPage',[usersController::class,'showusersPage']);
Route::post('/addNewUser',[usersController::class,'addNewUser']);
Route::post('/updateNewUser',[usersController::class,'updateNewUser']);
Route::post('/deleteNewUsers',[usersController::class,'deleteNewUsers']);
Route::get('/getNewUsersInfo',[usersController::class,'getNewUsersInfo']);
Route::get('/getNewUserDetails',[usersController::class,'getNewUserDetails']);


