<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});



Route::get('/register','RegisterController@getRegistered');
Route::get('/fetchDeptReg','RegisterController@fetchDepartment');
Route::get('/fetchCourse','RegisterController@fetchCourse');
Route::post('/registerUser','RegisterController@registerUser');

Route::get('/login','LoginController@getLogin');
Route::post('/loginValidate','LoginController@loginValidate');
Route::get('/logout','LoginController@logout');

Route::get('/mentor','FileController@getMentorForm');
Route::get('/feedback','FileController@getFeedbackForm');
Route::get('/fetchMentor','FileController@getMentor');
Route::get('/fetchBatch','FileController@getBatch');
Route::get('/fetchDepartment','FileController@getDepartment');
Route::get('/fetchSubject','FileController@getSubject');
Route::get('/fetchTeacher','FileController@getTeacher');


Route::post('/sendMail','FileController@sendMail');
Route::post('/sendFeedbackMail','FileController@sendFeedbackMail');


