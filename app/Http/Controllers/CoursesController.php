<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Files;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = new Courses;
        $courses = $courses->paginate(4);
        return view('admin.Courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $files = Files::paginate(12);

        return view('admin.Courses.create', compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $courses = new Courses;
        $validate_data = $request->validate(
            [
                'img' => 'required',
                'price' => 'required',
                'title' => 'required',
                'time' => 'required',
                'description' => 'required',
                'description2' => 'required',
            ]
        );
        $courses->img = $request->img;
        $courses->title = $request->title;
        $courses->price = $request->price;
        $courses->time = $request->time;
        $courses->description2 = $request->description2;
        $courses->description = $request->description;

        $courses->save();
        return redirect('admin/course')->with('message', 'Your data is submitted ');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $courseID
     * @return \Illuminate\Http\Response
     */
    public function show($courseID)
    {
        $files = Files::paginate(12);

        $courses = new Courses;
        $courses = $courses->where('courseID', $courseID)->First();
        return view('admin.Courses.show', compact('courses'), compact('files'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $courseID
     * @return \Illuminate\Http\Response
     */
    public function edit($courseID)
    {
        $files = Files::paginate(12);

        $courses = new Courses;
        $courses = $courses->where('courseID', $courseID)->First();
        return view('admin.Courses.edit', compact('courses', 'files'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $courseID
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $courseID)
    {
        $courses = new Courses;
        $courses = $courses->where('courseID', $courseID)->First();
        $courses->img = $request->img;
        $courses->price = $request->price;
        $courses->title = $request->title;
        $courses->time = $request->time;
        $courses->description2 = $request->description2;
        $courses->description = $request->description;
        $courses->update();
        return redirect('admin/course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $courseID
     * @return \Illuminate\Http\Response
     */
    public function destroy($courseID)
    {
        $courses = new Courses;
        $courses = $courses->where('courseID', $courseID)->first();;
        $courses->delete();
        return redirect('admin/course')->with('message', 'Your data has been deleted');
    }
}
