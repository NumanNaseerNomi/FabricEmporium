<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;

class ProfileController extends Controller
{
    function viewProfile()
    {
        return view("components.profile");
    }

    function updateProfile(Request $request)
    {
        $request->validate(
            [
                "_token" => "required",
                "name" => "required",
                "email" => "required",
                "contactNumber" => "required",
                "address" => "required",
            ]
        );

        $result = UsersModel::find($request->id);
        $result->update($request->all());

        $request->session()->put('user', $result);

        return redirect()->back();
    }
}
