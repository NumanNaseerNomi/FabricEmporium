<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Bag as BagModel;

use Illuminate\Http\Request;

class Bag extends Controller
{
    function showBag()
    {
        $userId = Session::get('user')->id;

        $myWishlist = BagModel::where('userId', $userId)->where('quantity', null)->get();
        $bagItems = BagModel::where('userId', $userId)->where('quantity', '>', 0)->get();
        
        $data = 
        [
            "myWishlist" => $myWishlist,
            "bagItems" => $bagItems,
        ];
        
        return view("myBag", $data);
    }

    function removeItem(Request $request)
    {
        $userId = Session::get('user')->id;
        
        $item = BagModel::find($request->id);
        $item->delete();

        return redirect()->back();
    }
}
