<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\settings;
use Illuminate\Http\Request;

class blogFrController extends Controller
{
    public function index()
    {
        $blogs = Blogs::paginate(9);
        $settings = settings::all();
        return view('blog', compact('blogs', 'settings'));
    }
}
