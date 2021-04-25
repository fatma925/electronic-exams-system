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

Route::get('/home', function () {
    return view('App.index');
});

Route::view("levels" , 'Admin/levels');
Route::view("departs" , 'Admin/depart');
Route::view("profs" , 'Admin/profs');
Route::view("subjects" , 'Admin/subjects');
Route::view("students" , 'Admin/students');
Route::view("prof_login" , 'App/prof-login');
Route::view("prof_register" , 'App/prof-register');
Route::view("student_login" , 'App/student-login');
Route::view("student_register" , 'App/student-register');
Route::view("faq" , 'App/FAQ');
Route::view("about_us" , 'App/about');
Route::view('results', 'professors.result');
Route::view('chapters', 'professors.chapter');
Route::view('questions', 'professors.question');
Route::view('exam', 'professors.exam');
Route::view('student_exam', 'students.exam');
Route::view('question_bank', 'students.question-bank');
Route::view('result', 'students.result');
Route::view('training_exam', 'students.training-exam');