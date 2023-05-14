<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class wishlistFrController extends Controller
{
    public function index()
    {
        $authid = Auth::id();

        $wishlist = Wishlist::where('userID', $authid)->get();

        if ($wishlist->isEmpty()) {
            return "No data";
        } else {
            $courseIDs = $wishlist->pluck('courseID');
            $courses = Courses::whereIn('courseID', $courseIDs)->get();
            return view('wishlist', compact('courses'));
        }
    }
};
