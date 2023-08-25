<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Subject;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Region;
use App\Http\Controllers\Center;
use App\Http\Controllers\QuestionType;
use App\Http\Controllers\QuestionMaster;
use App\Http\Controllers\QuestionMasterType;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\Candidate;
use App\Http\Controllers\EmployeeType;
use App\Http\Controllers\Employee;
use App\Http\Controllers\Department;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('subject',Subject::class);
Route::resource('region',Region::class);
Route::resource('QuestionMasterType',QuestionMasterType::class);
Route::resource('Question-type',QuestionType::class);
Route::resource('create-question',QuestionMaster::class);
Route::resource('Grade', GradeController::class);
Route::resource('employee-type', EmployeeType::class);
Route::resource('manage-department', Department::class);

Route::get('dashboard',[Dashboard::class,'index']);
Route::get('manage-center',[Center::class,'index']);
Route::get('create-center',[Center::class,'create']);
Route::post('save-center',[Center::class,'store']);
Route::get('create-candidate',[Candidate::class,'index']);
Route::post('save-candidate',[Candidate::class,'store']);
Route::get('candidate-listing',[Candidate::class,'candidate_listing']);
Route::get('create-employee',[Employee::class,'create']);
Route::post('store-employee',[Employee::class,'store']);
