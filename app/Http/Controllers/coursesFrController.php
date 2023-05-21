<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\settings;

class coursesFrController extends Controller
{
    public function index()
    {
        $courses = Courses::paginate(6);
        $settings = settings::all();
        return view('course-category', compact('courses', 'settings'));
    }
}
