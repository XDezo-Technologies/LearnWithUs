<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $newsletter = new Newsletter;
        $newsletter = $newsletter->paginate(4);
        return view('admin.newsletter.index', compact('newsletter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $newsletter = request()->get('img');
        return view('admin.newsletter.create', compact('files'));
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
        $newsletter = new Newsletter;
        $validate_data = $request->validate(
            [
                'email' => 'required',
            ]
        );
        $newsletter->email = $request->email;

        $newsletter->save();
        return redirect()->back()->with('success', 'Thank you for joining the newsletter!');
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
        $newsletter = new Newsletter;
        $newsletter = $newsletter->where('id', $id)->First();
        return view('admin.newsletter.show', compact('newsletter'));
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
        $newsletter = new Newsletter;
        $newsletter = $newsletter->where('id', $id)->First();
        return view('admin.newsletter.edit', compact('newsletter'));
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
        $newsletter = new Newsletter;
        $newsletter = $newsletter->where('id', $id)->First();
        $newsletter->email = $request->email;
        $newsletter->update();
        return redirect('/');
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
        $newsletter = new Newsletter;
        $newsletter = $newsletter->where('id', $id)->first();;
        $newsletter->delete();
        return redirect('/')->with('message', 'Your data has been deleted');
    }
}
