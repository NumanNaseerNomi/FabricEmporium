<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\UsersModel;
use App\Mail\SendEmail;
use App\Mail\VerifyOTP;

class AuthController extends Controller
{
    private $userInfo;

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
        $otp = random_int(100000, 999999);

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
        $request->merge(['otp' => Hash::make($otp)]);

        $user = UsersModel::create($request->all());
        $request->session()->put('verifyOTP', $user);
        
        Mail::to($request->email)->send(new VerifyOTP($user, $otp));
        
        return redirect('/verifyOTP');
    }

    function verifyOTPView()
    {
        return view("verifyOTP");
    }
        
    function verifyOTP(Request $request)
    {
        $request->validate(
            [
                '_token' => 'required',
                'id' => 'required',
                'otp' => 'required',
            ]
        );

        $user = UsersModel::where('id', $request->id)->first();
        
        if($user && Hash::check($request->otp, $user->otp))
        {
            $user->update(['otp' => null]);
            $request->session()->flush();
            $request->session()->put('user', $user);
            return redirect('/');
        }
        else
        {
            return back();
        }
    }

    function updatePassword(Request $request)
    {
        $request->validate(
            [
                "_token" => "required",
                "oldPassword" => "required",
                "password" => "required|confirmed",
            ]
        );

        $user = UsersModel::find(Session::get('user')->id);

        if($user && Hash::check($request->oldPassword, $user->password))
        {
            $user->update(['password' => $request->password]);
            return redirect()->back();
        }
        else
        {
            return back()->withInput();
        }
    }

    function resetPasswordView()
    {
        return view("resetPassword");
    }

    function sendResetPasswordEmail(Request $request)
    {
        $request->validate(
            [
                "_token" => "required",
                "email" => "required",
            ]
        );

        $user = UsersModel::where('email', $request->email)->first();

        if($user)
        {
            $otp = random_int(100000, 999999);
            $user->update(['otp' => Hash::make($otp)]);

            $configs = new \stdClass;
            $configs->view = "email.resetPassword";
            $configs->subject = "Fabric Emporium: Reset Password";
            $configs->user = $user;
            $configs->otp = $otp;

            Mail::to($request->email)->send(new SendEmail($configs));
            
            return redirect()->back()->with(['setPassword' => 1, 'userData' => $user]);
        }
        
        return redirect()->back();
    }

    function resetPassword(Request $request)
    {
        $request->validate(
            [
                "_token" => "required",
                "id" => "required",
                "otp" => "required",
                "password" => "required|confirmed",
            ]
        );

        $user = UsersModel::find($request->id);

        if($user && Hash::check($request->otp, $user->otp))
        {
            $user->update(['password' => Hash::make($request->password), 'otp' => null]);
            $request->session()->flush();
            $request->session()->put('user', $user);
            return redirect('/');
        }
        
        return redirect()->back();
    }

    function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }
}
