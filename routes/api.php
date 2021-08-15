<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SystemEntryController;
use App\Models\User;
use App\Http\Controllers\departController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\ExamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('profRegister', [SystemEntryController::class, 'profregister']);
Route::post('profLogin', [SystemEntryController::class, 'profLogin']);

Route::post('studentRegister', [SystemEntryController::class, 'studentRegister']);
Route::post('studentLogin', [SystemEntryController::class, 'studentLogin']);

Route::resource('departs', departController::class);
Route::resource('students', StudentController::class);
Route::resource('levels', LevelController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('professors', ProfessorController::class);
Route::resource('chapters', ChapterController::class);
Route::resource('exams', ExamController::class);
Route::post('logout', [SystemEntryController::class, 'logout']);
Route::group(['middleware'=>['auth:sanctum']],function () {
    
    
});
