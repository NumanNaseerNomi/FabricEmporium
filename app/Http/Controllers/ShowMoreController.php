<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products as ProductsModel;

class ShowMoreController extends Controller
{
    function showMore(Request $request)
    {
        $request->validate(
            [
                '_token' => 'required',
                'category' => 'required',
            ]
        );

        $products = ProductsModel::where('category', $request->category)->get();
        
        return view("showMore", ["products"=>$products]);
    }
}
