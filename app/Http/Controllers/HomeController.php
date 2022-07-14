<?php

namespace App\Http\Controllers;

use App\Models\BannersModel;
use App\Models\Products as ProductsModel;

class HomeController extends Controller
{
    function home()
    {
        $bannersModel = BannersModel::where('isActive', 1)->where('expiryAt', '>', now())->get();
        $categorys = ProductsModel::all()->unique('category')->sortBy('category')->pluck('category')->toArray();

        $productsByCategory = null;
        
        foreach($categorys as $category)
        {
            $productsByCategory[$category] = ProductsModel::where('category', $category)->paginate(4);
        }

        $data = 
        [
            "banners" => $bannersModel,
            "categorys" => $categorys,
            "productsByCategory" => $productsByCategory,
        ];
        
        return view("home", $data);
    }
}
