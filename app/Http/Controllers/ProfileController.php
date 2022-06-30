<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function viewProfile()
    {
        return view("components.profile");
    }

}
