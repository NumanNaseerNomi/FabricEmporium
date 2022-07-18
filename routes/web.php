<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowMoreController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ManageProducts as ManageProductsController;
use App\Http\Controllers\Bag as BagController;
use App\Http\Controllers\Comments as CommentsController;


// use Illuminate\Http\Request;
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
Route::post('/updatePassword', [AuthController::class, "updatePassword"])->middleware(['ifAuth']);

Route::get('/resetPassword', [AuthController::class, "resetPasswordView"])->middleware(['ifGuest']);
Route::post('/sendResetPasswordEmail', [AuthController::class, "sendResetPasswordEmail"])->middleware(['ifGuest']);
Route::post('/setPassword', [AuthController::class, "resetPassword"])->middleware(['ifGuest']);

Route::get('/register', [AuthController::class, "registerView"])->middleware(['ifGuest']);
Route::post('/register', [AuthController::class, "registerAuth"])->middleware(['ifGuest']);

Route::get('/verifyOTP', [AuthController::class, "verifyOTPView"])->middleware(['ifGuest']);
Route::post('/verifyOTP', [AuthController::class, "verifyOTP"])->middleware(['ifGuest']);

Route::get('/login', [AuthController::class, "loginView"])->middleware(['ifGuest']);
Route::post('/login', [AuthController::class, "loginAuth"])->middleware(['ifGuest']);
Route::get('/logout', [AuthController::class, "logout"])->middleware(['ifAuth']);

Route::get('/manageProducts', [ManageProductsController::class, "viewProducts"])->middleware(['ifAdmin']);
Route::post('/manageProducts', [ManageProductsController::class, "updateProduct"])->middleware(['ifAdmin']);
Route::post('/deleteProduct', [ManageProductsController::class, "deleteProduct"])->middleware(['ifAdmin']);

Route::post('/showMore', [ShowMoreController::class, "ShowMore"]);

Route::get('/myBag', [BagController::class, "showBag"])->middleware(['ifAuth']);
Route::post('/addToWishlist', [BagController::class, "addToWishlist"])->middleware(['ifAuth']);
Route::post('/removeFromWishlist', [BagController::class, "removeFromWishlist"])->middleware(['ifAuth']);
Route::post('/addToShoppingBag', [BagController::class, "addToShoppingBag"])->middleware(['ifAuth']);
Route::post('/removeFromShoppingBag', [BagController::class, "removeFromShoppingBag"])->middleware(['ifAuth']);

Route::post('/addComment', [CommentsController::class, "addComment"])->middleware(['ifAuth']);

Route::post('/search', [ManageProductsController::class, "search"]);

Route::get('/place-order', function () {
    return view('checkout');
});

Route::get('/changePassword', function () {
    return view('changePassword');
});
