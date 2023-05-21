<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminFrController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        $admins = new User;
        $admins = $admins->where('id', $id)->First();
        $admins->name = $request->name;
        $admins->email = $request->email;
        $admins->phone = $request->phone;
        $admins->address = $request->address;
        $admins->password = $request->password;
        $admins->role = $request->role;
        $admins->update();
        return redirect('user-profile')->with('message', 'success');
    }
}
