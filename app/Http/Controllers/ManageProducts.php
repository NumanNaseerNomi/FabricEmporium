<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
use App\Models\Products as ProductsModel;

class ManageProducts extends Controller
{
    function viewProducts()
    {
        $products = ProductsModel::all();

        return view("manageProducts", ["products" => $products]);
    }

    function updateProduct(Request $request)
    {
        $request->validate(
            [
                "_token" => "required",
                "title" => "required",
                "description" => "required",
                "brand" => "required",
                "category" => "required",
                "price" => "required",
                "discount" => "required",
                "quantity" => "required",
                "status" => "required",
                "image" => "required",
            ]
        );

        $image = $request->file("image")->store("images/products", ['disk' => 'public']);
        $image = str_replace("images/products/", "", $image);

        $product = ProductsModel::create($request->all());
        $product->update(["image" => $image]);
        
        return redirect()->back();
    }

    function deleteProduct(Request $request)
    {
        $product = ProductsModel::find($request->id);
        $image = public_path('storage/images/products/' . $product->image);
        
        File::delete($image);
        $product->delete();

        return redirect()->back();
    }
}
