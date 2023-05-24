<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\settings;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('search');

        $blogs = Blogs::where("type", "like", "%" . "$keyword" . "%")->get();

        $settings = Settings::all();
        return view('search', compact('blogs', 'settings'));
    }
}
