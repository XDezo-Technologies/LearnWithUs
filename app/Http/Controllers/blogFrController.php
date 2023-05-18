<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class blogFrController extends Controller
{
    public function index()
    {
        $blogs = Blogs::paginate(9);
        return view('blog', compact('blogs'));
    }
}
