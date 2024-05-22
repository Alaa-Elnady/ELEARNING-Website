<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    // Show All Instructors
    public function showAllInstructors() {
        return view('instructors.all-instructors' , [
            'instructors' => Instructor::all(),
        ]);
    }
}
