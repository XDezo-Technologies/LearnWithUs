<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Settings;
use App\Models\Abouts;
use App\Models\Clients;
use App\Models\Courses;
use App\Models\Facts;
use App\Models\teachers;
use App\Models\Testimonials;

class IndexFrController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $settings = Settings::all();
        $clients = Clients::limit(4)->get();
        $abouts = Abouts::limit(1)->get();
        $facts = Facts::limit(3)->get();
        $courses = Courses::limit(3)->get();
        $teachers = teachers::all();
        $testimonials = Testimonials::all();

        return view('index', compact('sliders', 'clients', 'abouts', 'facts', 'courses', 'teachers', 'testimonials', 'settings'));
    }
}
