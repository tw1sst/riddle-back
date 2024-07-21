<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\LessonController;
use App\Http\Controllers\Api\V1\PostController;
use App\Http\Controllers\Api\V1\SchoolController;
use App\Http\Controllers\Api\V1\TaskController;
use App\Http\Controllers\Api\V1\CourseController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::resource('user', UserController::class);
Route::resource('lesson', LessonController::class);
Route::resource('post', PostController::class);
Route::resource('school', SchoolController::class);
Route::resource('task', TaskController::class);
Route::resource('course', CourseController::class);
