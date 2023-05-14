<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseBooked;

class CourseBookedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courseBooked = new CourseBooked;
        $courseBooked = $courseBooked->paginate(4);
        return view('admin.CourseBooked.index', compact('courseBooked'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.CourseBooked.create', compact('files'));
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
        $courseBooked = new CourseBooked;
        $validate_data = $request->validate(
            [
                'courseID' => 'required',
                'userID' => 'required',
            ]
        );
        $courseBooked->courseID = $request->courseID;
        $courseBooked->userID = $request->userID;

        $courseBooked->save();
        return redirect('admin/about')->with('message', 'Your data is submitted ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courseBooked = new CourseBooked;
        $courseBooked = $courseBooked->where('id', $id)->First();
        return view('admin.CourseBooked.show', compact('courseBooked', 'files'));
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
        $courseBooked = new CourseBooked;
        $courseBooked = $courseBooked->where('id', $id)->First();
        return view('admin.CourseBooked.edit', compact('courseBooked', 'files'));
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

        $courseBooked = new CourseBooked;
        $courseBooked = $courseBooked->where('id', $id)->First();
        $courseBooked->courseID = $request->courseID;
        $courseBooked->userID = $request->userID;
        $courseBooked->update();
        return redirect('admin/about');
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
        $courseBooked = new CourseBooked;
        $courseBooked = $courseBooked->where('id', $id)->first();;
        $courseBooked->delete();
        return redirect('admin/about')->with('message', 'Your data has been deleted');
    }
}