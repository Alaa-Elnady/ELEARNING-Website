<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\UserController;
use App\Models\Instructor;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' ,function() {
    return view('index');
});

// Users Routes
// ***************************************
// Route to show the register form
Route::get('/register' , [UserController::class , 'showRegForm']);

// Route to create new user from register form
Route::post('/users' , [UserController::class , 'storeNewUser']);

// Route to show Log In Form
Route::get('/login' , [UserController::class , 'showLoginForm']);

// Route to login user and authenticate him
Route::post('/users/authenticate' , [UserController::class , 'authenticate']);

// Route to logout user
Route::post('/logout' , [UserController::class , 'logout']);


// Courses Routes
// ***************************************
// Show All Courses
Route::get('/courses/allCourses' , [CourseController::class , 'showAllCourses'])->name('all-courses');

// Show single course details
Route::get('/courses/{course}/showCourseDetails' , [CourseController::class , 'showCourseDetails']);



// About Routes
// ***************************************
Route::get('/about' , function() {
    return view('about');
})->name('about');



// Instructors Routes
// ***************************************
Route::get('/all-instructors' , [InstructorController::class , 'showAllInstructors'])->name('all-instructors');

