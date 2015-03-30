<?php

//Login Route
Route::get('login', array('as' => 'login', 'uses' => 'LoginController@login'));
//Login Submit Route
Route::post('login', array('as' => 'submit_login', 'uses' => 'LoginController@proceed'));
//Dashboard get Route
Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'DashboardController@show_menu'));
//Date Submit Route
Route::post('datewise', array('as' => 'date_submit', 'uses' => 'DashboardController@datewise_entry'));
Route::get('datewise', 'DashboardController@datewise_entry');
//Logout Submit Route
Route::post('logout', array('as' => 'logout_submit', 'uses' => 'LoginController@logout'));
//Student Info Submit Route
Route::post('dashboard', array('as' => 'dashboard_info', 'uses' => 'DashboardController@store'));
//Register Entry Route
Route::post('dashboard/entry', array('as' => 'register_entry', 'uses' => 'DashboardController@throw_entry'));
//Datewise Student Info Route
Route::post('datewise/entry', array('as' => 'datewise_info', 'uses' => 'DashboardController@store'));
//New Datewise Entry Route
Route::post('datewise', array('as' => 'date_change_submit', 'uses' => 'DashboardController@new_datewise_entry'));
//Back Button Route
Route::post('dashboard/back', array('as' =>'back_button', 'uses' => 'DashboardController@back_button'));
//Report Button Route
Route::post('report', array('as' =>'report_submit', 'uses' => 'ReportController@report_menu'));
//Generate Report Route
Route::post('generate_report', array('as' =>'generate_report', 'uses' => 'ReportController@generate_report'));





// Route::post('datewise/entry', array('as' => 'register_datewise_entry', 'uses' => 'DashboardController@throw_entry'));





// Route::post('logout', array('as' => 'logout', 'uses' => 'LoginController@logout'));
// Route::get('login', 'LoginController@login');
// Route::post('login', 'LoginController@proceed');
// Route::get('dashboard', 'DashboardController@show_menu');
// Route::post('dashboard',array('as' => 'dashboard_info' ,'uses'=>'DashboardController@store'));
// Route::post('dashboard/entry', 'DashboardController@throw_entry');
// Route::post('dashboard', 'DashboardController@store');
// Route::post('datewise', array('as' => 'datewise', 'uses' => 'DashboardController@datewise_entry'));
// Route::post('datewise_student_entry', array('as' => 'datewise_student_entry', 'uses' => 'DashboardController@throw_entry'));
// Route::post('dashboard', array('as' => 'normal_entry', 'uses' => 'DashboardController@show_menu'));


Route::get('get', function()
{
    var_dump(\Session::get('current_user'));
    var_dump(\Session::get('entry_date'));
    var_dump(\Session::get('student_no'));

}
);
Route::controllers([

	'auth'=>'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	]);


