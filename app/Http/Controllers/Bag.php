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

    function addtoWishlist(Request $request)
    {
        $userId = Session::get('user')->id;
        $item = BagModel::where('userId', $userId)->where('productId', $request->id)->where('quantity', null)->get();

        if(!count($item))
        {
            $data =
            [
                'productId' => $request->id,
                'userId' => $userId,
            ];

            BagModel::create($data);
        }

        return redirect()->back();
    }

    function removeItem(Request $request)
    {
        $item = BagModel::find($request->id);
        $item->delete();

        return redirect()->back();
    }
}
