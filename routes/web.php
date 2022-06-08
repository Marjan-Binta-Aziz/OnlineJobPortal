<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// admin controller
Route::get('/','IndexController@index')->name('frontend.index');
Route::get('/main','IndexController@admin')->name('admin.index')->middleware('is_admin');


//category controller
Route::get('/viewcategory','CategoryController@viewcategory')->name('admin.viewcategory');
Route::get('/addcategory','CategoryController@addcategory')->name('admin.addcategory');
Route::POST('/category/store','CategoryController@store')->name('admin.cat_store');
Route::get('/category/edit/{id}','CategoryController@edit')->name('admin.cat_edit');
Route::POST('/category/update/{id}','CategoryController@update')->name('admin.cat_update');
Route::get('/category/destroy/{id}','CategoryController@destroy')->name('admin.cat_destroy');

//user messages
Route::get('/admin/user_message','MessageController@user_message')->name('admin.user_message');
Route::POST('/sendmessage','MessageController@store')->name('user.store');
Route::get('/user/message','MessageController@message')->name('user.send');
Route::get('/message/destroy/{id}','MessageController@destroy')->name('message.destroy');
Route::get('/message/view/{id}','MessageController@view')->name('message.view');


//job controller
Route::get('/postjob','JobController@postjob')->name('admin.postjob');
Route::get('/managejob','JobController@managejob')->name('admin.managejob');
Route::POST('/job/store','JobController@store')->name('admin.jobstore');
Route::get('/job/edit/{id}','JobController@edit')->name('admin.jobedit');
Route::get('/job/show/{id}','JobController@show')->name('admin.jobshow');
Route::POST('/job/update/{id}','JobController@update')->name('admin.jobupdate');
Route::get('/job/destroy/{id}','JobController@destroy')->name('admin.jobdestroy');
Route::get('/alljobs','FrontJobController@alljob')->name('front.alljobs');
Route::get('/singlejob/{id}','FrontJobController@singlejob')->name('front.singlejob');

Route::get('/search','FrontJobController@search')->name('search');

//aplication
Route::post('/user/job/apply/{id}','ApplicationController@store')->name('application.store');
Route::post('/user/profile/update','UserController@update')->name('user.update');

//blog controller
Route::get('/addblog','BlogController@addblog')->name('admin.addblog');
Route::get('/viewblog','BlogController@view')->name('admin.viewblog');
Route::POST('/blog/store','BlogController@store')->name('admin.blogstore');
Route::get('/blog/edit/{id}','BlogController@edit')->name('admin.editblog');
Route::POST('/blog/update/{id}','BlogController@update')->name('admin.blogupdate');
Route::get('/blog/destroy/{id}','BlogController@destroy')->name('admin.blogdestroy');

Route::get('/allblog','IndexController@frontblog')->name('front.allblog');

//Companies controller
Route::get('/addcompanies','CompaniesController@addcompanies')->name('admin.addcompanies');
Route::get('/allcompanies','CompaniesController@allcompanies')->name('admin.allcompanies');
Route::POST('/companies/store','CompaniesController@store')->name('admin.storecompanies');
Route::get('/companies/edit/{id}','CompaniesController@edit')->name('admin.editcompanies');
Route::POST('/companies/update/{id}','CompaniesController@update')->name('admin.updatecompanies');
Route::get('/companies/destroy/{id}','CompaniesController@destroy')->name('admin.destroycompanies');

Route::get('/user/allcompanies','CompaniesController@companies')->name('user.companies');

//Report controller
Route::get('/user-report','ReportController@userreport')->name('admin.user-report');
Route::get('/companies-report','ReportController@companiesreport')->name('admin.companies-report');
Route::get('/user_report/view/{id}','ReportController@view')->name('user-report.view');


//USER_Controller
Route::get('/mainu','UserController@user')->name('user.index');

//UserjobController
Route::get('/userjob','UserjobController@userjob')->name('user.userjob');
Route::get('/appliedjobs','UserjobController@appliedjobs')->name('user.appliedjobs');

//UserCompaniesController
Route::get('/usercompanies','UserCompaniesController@usercompanies')->name('user.usercompanies');
Route::get('/appliedcompanies','UserCompaniesController@appliedcompanies')->name('user.appliedcompanies');

//UserInfoController
Route::get('/userprofile','UserInfoController@showuserprofile')->name('user.showuserprofile');
Route::get('/updateprofile','UserInfoController@updateprofile')->name('user.updateprofile');


//ReportGenaration
Route::get('/userreportgenration','UserReportController@reportgenaration')->name('user.userreportgenaration');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
