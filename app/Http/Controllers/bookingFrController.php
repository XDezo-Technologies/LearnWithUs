<?php

namespace App\Http\Controllers;

use App\Models\settings;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class bookingFrController extends Controller
{
    public function index()
    {
        $settings = settings::all();
        if (Auth::check()) {

            return view('booking', compact('settings'));
        } else {
            return view('auth.login');
        }
    }
}
