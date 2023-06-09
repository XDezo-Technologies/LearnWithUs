<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Courses;
use App\Models\settings;
use Illuminate\Support\Facades\Auth;

class PurchasedController extends Controller
{
    public function index()
    {
        $settings = settings::all();
        $userID = Auth::id();
        $orders = Order::where('esewa_status', 'Verified')->where('userID', $userID)->get();

        $courseIDs = $orders->pluck('courseID')->toArray();
        $courses = Courses::whereIn('courseID', $courseIDs)->get();

        return view('purchased', compact('courses', 'settings'));
    }
}
