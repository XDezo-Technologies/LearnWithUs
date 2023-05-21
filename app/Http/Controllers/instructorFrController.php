<?php

namespace App\Http\Controllers;

use App\Models\settings;
use App\Models\teachers;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class instructorFrController extends Controller
{
    public function index()
    {
        $teachers = Teachers::all();
        $testimonials = Testimonials::all();
        $settings = settings::all();
        return view('instructor', compact('teachers', 'testimonials', 'settings'));
    }
}
