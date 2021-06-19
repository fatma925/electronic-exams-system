<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SystemEntryController;
use App\Models\User;
use App\Http\Controllers\departController;
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


Route::group(['middleware'=>['auth:sanctum']],function () {
    Route::resource('departs', departController::class);
    Route::resource('students', departController::class);
    Route::resource('levels', departController::class);
    Route::resource('subjects', departController::class);
    Route::resource('professors', departController::class);
});
