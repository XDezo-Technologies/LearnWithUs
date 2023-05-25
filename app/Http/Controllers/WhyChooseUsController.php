<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WhyChooseUs;
use App\Models\Files;

class WhyChooseUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $whyChooseUs = new WhyChooseUs;
        $whyChooseUs = $whyChooseUs->paginate(6);
        return view('admin.WhyChooseUs.index', compact('whyChooseUs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $files = Files::paginate(12);

        return view('admin.WhyChooseUs.create', compact('files'));
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
        $whyChooseUs = new WhyChooseUs;
        $validate_data = $request->validate(
            [
                'logo' => 'required',
                'title' => 'required',
                'description' => 'required',
            ]
        );
        $whyChooseUs->logo = $request->logo;
        $whyChooseUs->title = $request->title;
        $whyChooseUs->description = $request->description;

        $whyChooseUs->save();
        return redirect('admin/whyChooseUs')->with('message', 'Your data is submitted ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $files = Files::paginate(12);

        $whyChooseUs = new WhyChooseUs;
        $whyChooseUs = $whyChooseUs->where('id', $id)->First();
        return view('admin.WhyChooseUs.show', compact('whyChooseUs', 'files'));
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
        $files = Files::paginate(12);

        $whyChooseUs = new WhyChooseUs;
        $whyChooseUs = $whyChooseUs->where('id', $id)->First();
        return view('admin.WhyChooseUs.edit', compact('whyChooseUs', 'files'));
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

        $whyChooseUs = new WhyChooseUs;
        $whyChooseUs = $whyChooseUs->where('id', $id)->First();
        $whyChooseUs->logo = $request->logo;
        $whyChooseUs->title = $request->title;
        $whyChooseUs->description = $request->description;
        $whyChooseUs->update();
        return redirect('admin/whyChooseUs');
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
        $whyChooseUs = new WhyChooseUs;
        $whyChooseUs = $whyChooseUs->where('id', $id)->first();;
        $whyChooseUs->delete();
        return redirect('admin/whyChooseUs')->with('message', 'Your data has been deleted');
    }
}
