<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/login', function () {
    return view('login', ['path' => '/login']);
});

Route::get('/logout', function () {
    Session::forget('user');
    return view('login');
});

Route::view('/registration', 'registration');
Route::post('/registration', [UserController::class, 'Registration']);
Route::post("/login", [UserController::class, 'login']);
Route::get("/", [ProductController::class, 'index']);
Route::get("/detail/{id}", [ProductController::class, 'detail']);
Route::get("/search", [ProductController::class, 'search']);
Route::post("/add_to_cart", [ProductController::class, 'addToCart']);
Route::get("/cartlist", [ProductController::class, 'cartlist']);
Route::get("/remove_from_cart/{id}", [ProductController::class, 'remove_from_cart']);
Route::get("/ordernow", [ProductController::class, 'orderNow']);
Route::post("/place_order", [ProductController::class, 'placeOrder']);
Route::get("/my_orders", [ProductController::class, 'myOrders']);
