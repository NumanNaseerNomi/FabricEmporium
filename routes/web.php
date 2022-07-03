<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowMoreController;
// use App\Http\Controllers\SignAuthController;
// use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;


use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomeController::class, "home"]);
Route::get('/myProfile', [ProfileController::class, "viewProfile"]);

Route::get('/showMore', [ShowMoreController::class, "ShowMore"]);
// Route::get('/signup', [SignAuthController::class, "showSignup"]);
//Route::get('/show/cart', [CartController::class, "viewCart"]);
Route::get('/place-order', function () {
    return view('placeorder');
});

Route::get('/myBag', function () {
    return view('myBag');
});


Route::post('/addToCart', function (Request $request) {
    return $request;
});

Route::get('/signup', function () {
    return view('signUp');
});

Route::get('/login', [AuthController::class, "authView"]);
Route::post('/login', [AuthController::class, "loginAuth"]);

Route::post('/register', [AuthController::class, "registerAuth"]);
Route::get('/logout', [AuthController::class, "logout"]);
// Route::get('/login', function () {
//     return view('authenticate');
// });

// Route::post('/login', function (Request $request) {
//     return $request;
// });

// Route::post('/register', function (Request $request) {
//     return $request;
// });