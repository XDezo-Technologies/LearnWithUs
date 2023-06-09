<?php

namespace App\Http\Controllers;

use App\Models\settings;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userProfileController extends Controller
{
    public function index()
    {
        $settings = settings::all();
        $userID = Auth::id();
        $users = new User;
        $users = $users->where('id', $userID)->get();
        return view('user-profile', compact('users', 'settings'));
    }
}
