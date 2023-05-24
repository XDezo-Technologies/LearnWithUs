<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\settings;

class blogDetailFrController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $blogs = Blogs::all();
        $blogs = $blogs->where('id', $id)->first();
        $settings = settings::all();
        return view('blog-detail', compact('blogs', 'settings'));
    }
}
