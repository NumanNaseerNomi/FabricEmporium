<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Bag as BagModel;
use App\Models\Orders as OrdersModel;

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

    function addToWishlist(Request $request)
    {
        $userId = Session::get('user')->id;
        $item = BagModel::where('userId', $userId)->where('productId', $request->id)->where(function($query) {$query->where('quantity', null)->orWhere('quantity', '>', 0);})->get();

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

    function removeFromWishlist(Request $request)
    {
        $item = BagModel::find($request->id);
        $item->delete();

        return redirect()->back();
    }

    function addToShoppingBag(Request $request)
    {
        $item = BagModel::find($request->id);

        if(!$item->quantity)
        {
            $item->update(["quantity" => 1]);
        }

        return redirect()->back();
    }

    function removeFromShoppingBag(Request $request)
    {
        $item = BagModel::find($request->id);
        $item->update(["quantity" => null]);

        return redirect()->back();
    }

    function checkout(Request $request)
    {
        $request->validate(["_token" => "required",]);
        $userId = Session::get('user')->id;

        $bagItems = BagModel::where('userId', $userId)->where('quantity', '>', 0)->get();
        $order = OrdersModel::create(["userId" => $userId, "address" => "dummy"]);
        
        BagModel::whereIn('id', $bagItems->pluck("id")->toArray())->update(['orderId' => $order->id]);

        return redirect()->back();
    }
}
