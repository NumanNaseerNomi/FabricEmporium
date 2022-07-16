<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Models\UsersModel;

class ProfileController extends Controller
{
    function viewProfile()
    {
        return view("profile");
    }

    function updateProfile(Request $request)
    {
        $request->validate(
            [
                "_token" => "required",
                "name" => "required",
                "contactNumber" => "required",
                "address" => "required",
            ]
        );

        $result = UsersModel::find(Session::get('user')->id);
        $result->update($request->all());

        $request->session()->put('user', $result);

        return redirect()->back();
    }
}
