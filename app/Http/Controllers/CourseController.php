<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Show all courses & carigories
    public function showAllCourses() {
        return view('courses.allCourses' , [
            // dd(Course::latest())
            'courses' => Course::all()
        ]);
    }

    // Show Single Course Details
    public function showCourseDetails(Course $course) {
        return view('courses.showCourseDetails' , ['course' => $course]);
    }
}
