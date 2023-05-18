<?php

namespace App\Http\Controllers;

use App\Models\Abouts;
use App\Models\AboutsFeatures;
use App\Models\whyChooseUs;
use Illuminate\Http\Request;

class AboutsFrController extends Controller
{
    public function index()
    {
        $abouts = Abouts::limit(1)->get();
        $aboutsFeatures = AboutsFeatures::limit(2)->get();
        $whyChooseUs = whyChooseUs::paginate(6);
        return view('aboutus', compact('abouts', 'aboutsFeatures', 'whyChooseUs'));
    }
}
