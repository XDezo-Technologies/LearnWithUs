<?php

namespace App\Http\Controllers;

use App\Models\settings;
use Illuminate\Http\Request;

class courseDetailFrController extends Controller
{
    public function index()
    {
        $settings = settings::all();
        return view('course-detail', compact('settings'));
    }
}
