<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;

class coursesFrController extends Controller
{
    public function index()
    {
        $courses = Courses::paginate(6);
        return view('course-category', compact('courses'));
    }
}
