<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseUserController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Routes User
Route::get('users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::post('users', [UserController::class, 'create']);
Route::put('users/{id}', [UserController::class, 'update']);
Route::delete('users/{id}', [UserController::class, 'delete']);

//Routes Course
Route::get('courses', [CourseController::class, 'index']);
Route::get('courses/{id}', [CourseController::class, 'show']);
Route::post('courses', [CourseController::class, 'create']);
Route::put('courses/{id}', [CourseController::class, 'update']);
Route::delete('courses/{id}', [CourseController::class, 'delete']);


//Route Course Users
Route::get('courses_users', [CourseUserController::class, 'index']);
