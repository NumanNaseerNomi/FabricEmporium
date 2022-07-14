<?php

namespace App\Http\Controllers;

use App\Models\BannersModel;
use App\Models\Products as ProductsModel;

class HomeController extends Controller
{
    function home()
    {
        $bannersModel = BannersModel::where('isActive', 1)->where('expiryAt', '>', now())->get();
        $categories = ProductsModel::all()->unique('category')->sortBy('category')->pluck('category')->toArray();

        $productsByCategory = null;
        
        foreach($categories as $category)
        {
            $productsByCategory[$category] = ProductsModel::where('category', $category)->paginate(4);
        }

        $data = 
        [
            "banners" => $bannersModel,
            "categories" => $categories,
            "productsByCategory" => $productsByCategory,
        ];
        
        return view("home", $data);
    }
}
