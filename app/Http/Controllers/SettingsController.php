<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\Files;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $settings = new Settings;
        $settings = $settings->paginate(6);
        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $settings = request()->get('img');

        return view('admin.settings.create');
        //
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
        $settings = new Settings;
        $validate_data = $request->validate(
            [
                'siteKey' => 'required',
                'siteValue' => 'required',
            ]
        );
        $settings->siteKey = $request->siteKey;
        $settings->siteValue = $request->siteValue;

        $settings->save();
        return redirect('admin/setting')->with('message', 'Your data is submitted ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //
        $settings = new Settings;
        $settings = $settings->where('id', $id)->First();
        return view('admin.settings.show', compact('settings'));
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
        $settings = new Settings;
        $settings = $settings->where('id', $id)->First();
        return view('admin.settings.edit', compact('settings'));
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
        $settings = new Settings;
        $settings = $settings->where('id', $id)->First();
        $settings->siteKey = $request->siteKey;
        $settings->siteValue = $request->siteValue;
        $settings->update();
        return redirect('admin/setting');
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
        $settings = new Settings;
        $settings = $settings->where('id', $id)->first();;
        $settings->delete();
        return redirect('admin/setting')->with('message', 'Your data has been deleted');
    }
}
