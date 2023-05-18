<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('search');

        $blogs = Blogs::where("type", "like", "%" . "$keyword" . "%")->get();

        return view('search', compact('blogs'));
    }
}
