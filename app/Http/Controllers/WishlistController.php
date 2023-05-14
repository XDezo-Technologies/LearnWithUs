<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Files;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $wishlist = new Wishlist;
        $wishlist = $wishlist->paginate(4);
        return view('admin.wishlist.index', compact('wishlist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $courseID = $request->input('courseID');
        $userID = $request->input('userID');
        $id = $request->input('id');

        $courseIdRemoveCart = $request->input('courseIdRemoveCart');
        $userIdRemoveCart = $request->input('userIdRemoveCart');

        $wishlist = new Wishlist;

        //to remove from cart
        if ($courseIdRemoveCart !== null && $userIdRemoveCart !== null && $courseIdRemoveCart !== "" && $userIdRemoveCart !== "") {

            $wishlist1 = $wishlist->where('userID', $userIdRemoveCart)
                ->where('courseID', $courseIdRemoveCart)
                ->first();

            $wishlist1->delete();

            if ($wishlist1) {
                return response()->json(['message' => 'Data Removed']);
            } else {
                return response()->json(['message' => 'Data Not Found']);
            }
        }
        //get all user's data
        if ($id != null && $id !== "") {
            $wishlist = $wishlist->where('userID', $id)->get();
            return response()->json(['message' => $wishlist]);
        }
        //to store data
        else {
            $wishlist->courseID = $courseID;
            $wishlist->userID = $userID;
            $wishlist->save();
            return response()->json(['message' => 'Data Stored']);
        }
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
        $wishlist = new Wishlist;
        $wishlist = $wishlist->where('id', $id)->First();
        return view('admin.wishlist.show', compact('wishlist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $files = Files::all();
        //
        $wishlist = new Wishlist;
        $wishlist = $wishlist->where('id', $id)->First();
        return view('admin.wishlist.edit', compact('wishlist'), compact('files'));
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
        $wishlist = new Wishlist;
        $wishlist = $wishlist->where('id', $id)->First();
        $wishlist->courseID = $request->courseID;
        $wishlist->userID = $request->userID;
        $wishlist->update();
        return redirect('admin/wishlist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $courseID = $request->input('courseID');
        $userID = $request->input('userID');
        //

        $wishlist = new Wishlist;
        $wishlist = $wishlist->where('userID', $userID)
            ->where('courseID', $courseID)
            ->first();
        $wishlist->delete();
        return response()->json(['message' => 'Data Removed']);
    }
    // public function destroy($id)
    // {
    //     //
    //     $wishlist = new Wishlist;
    //     $wishlist = $wishlist->where('id', $id)->first();;
    //     $wishlist->delete();
    //     return redirect('admin/wishlist')->with('message', 'Your data has been deleted');
    // }
}
