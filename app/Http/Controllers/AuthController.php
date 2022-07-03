<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UsersModel;

class AuthController extends Controller
{
    function authView()
    {
        return view("authenticate");
    }

    function loginAuth(Request $request)
    {
        $request->validate(
            [
                '_token' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]
        );

        $user = UsersModel::where('email', $request->email)->first();

        if($user && Hash::check($request->password, $user->password))
        {
            $request->session()->put('user', $user);
            return redirect('/');
        }
        else
        {
            return back()->withInput();
        }
    }

    function registerAuth(Request $request)
    {
        return $request;
    }

    function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }
}
