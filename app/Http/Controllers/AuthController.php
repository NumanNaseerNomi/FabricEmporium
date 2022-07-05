<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UsersModel;

class AuthController extends Controller
{
    function loginView()
    {
        return view("login");
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

    function registerView()
    {
        return view("register");
    }
    
    function registerAuth(Request $request)
    {
        $request->validate(
            [
                '_token' => 'required',
                'name' => 'required',
                'email' => 'required',
                'contactNumber' => 'required',
                'address' => 'required',
                'password' => 'required|confirmed',
            ]
        );

        $request->merge(['password' => Hash::make($request->password)]);
        $user = UsersModel::create($request->all());
        $request->session()->put('user', $user);
        return redirect('/');
    }

    function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }
}
