<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannersModel;

class HomeController extends Controller
{
    function home()
    {
        $bannersModel = BannersModel::where('isActive', 1)->where('expiryAt', '>', now())->get();
        
        return view("home", ["banners"=>$bannersModel]);
    }
}
