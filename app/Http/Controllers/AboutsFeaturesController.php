<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutsFeatures;

class AboutsFeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $aboutFeatures = new AboutsFeatures;
        $aboutFeatures = $aboutFeatures->paginate(4);
        return view('admin.AboutsFeature.index', compact('aboutFeatures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.AboutsFeature.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $aboutFeatures = new AboutsFeatures;
        $validate_data = $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
            ]
        );
        $aboutFeatures->title = $request->title;
        $aboutFeatures->description = $request->description;

        $aboutFeatures->save();
        return redirect('admin/aboutFeature')->with('message', 'Your data is submitted ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aboutFeatures = new AboutsFeatures;
        $aboutFeatures = $aboutFeatures->where('id', $id)->First();
        return view('admin.AboutsFeature.show', compact('aboutFeatures'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $aboutFeatures = new AboutsFeatures;
        $aboutFeatures = $aboutFeatures->where('id', $id)->First();
        return view('admin.AboutsFeature.edit', compact('aboutFeatures'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $aboutFeatures = new AboutsFeatures;
        $aboutFeatures = $aboutFeatures->where('id', $id)->First();
        $aboutFeatures->title = $request->title;
        $aboutFeatures->description = $request->description;
        $aboutFeatures->update();
        return redirect('admin/aboutFeature');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $aboutFeatures = new AboutsFeatures;
        $aboutFeatures = $aboutFeatures->where('id', $id)->first();;
        $aboutFeatures->delete();
        return redirect('admin/aboutFeature')->with('message', 'Your data has been deleted');
    }
}
