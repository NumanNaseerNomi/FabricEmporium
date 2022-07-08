<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowMoreController;
// use App\Http\Controllers\SignAuthController;
// use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ManageProducts as ManageProductsController;


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
Route::get('/myProfile', [ProfileController::class, "viewProfile"])->middleware(['ifAuth']);
Route::post('/updateProfile', [ProfileController::class, "updateProfile"])->middleware(['ifAuth']);

Route::get('/register', [AuthController::class, "registerView"])->middleware(['ifGuest']);
Route::post('/register', [AuthController::class, "registerAuth"])->middleware(['ifGuest']);
Route::get('/login', [AuthController::class, "loginView"])->middleware(['ifGuest']);
Route::post('/login', [AuthController::class, "loginAuth"])->middleware(['ifGuest']);
Route::get('/logout', [AuthController::class, "logout"])->middleware(['ifAuth']);

Route::get('/manageProducts', [ManageProductsController::class, "viewProducts"]);
Route::post('/manageProducts', [ManageProductsController::class, "updateProduct"]);
Route::post('/deleteProduct', [ManageProductsController::class, "deleteProduct"]);

Route::get('/showMore', [ShowMoreController::class, "ShowMore"]);

Route::get('/place-order', function () {
    return view('placeorder');
});

Route::get('/myBag', function () {
    return view('myBag');
});

Route::get('/test', function () {
    return view('manageProducts');
});
