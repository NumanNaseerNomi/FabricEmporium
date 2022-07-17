<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Models\Comments as CommentsModel;

class Comments extends Controller
{
    function addComment(Request $request)
    {
        $request->validate(
            [
                "_token" => "required",
                "productId" => "required",
                "comment" => "required",
            ]
        );

        $request->merge(['userId' => Session::get('user')->id]);
        
        CommentsModel::create($request->all());

        return redirect()->back();
    }
}
