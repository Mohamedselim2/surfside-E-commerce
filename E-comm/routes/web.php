<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/continue_shopping', function () {
    return view('continue_shopping');
});
//Route::get('/dashboard', function () {
//    return view('dashboard');
//});




//UserController::class
Route::post('/login',[UserController::class,'login']);
Route::post('register',[UserController::class,'register']);
Route::get('logout',[UserController::class,'logout']);
Route::post('profile',[UserController::class,'edite_profile']);
Route::post('change_password',[UserController::class,'change_password']);

//ProductController::class
Route::get('/',[ProductController::class,'index']);
Route::Post('/admin',[ProductController::class,'add']);
Route::get('search',[ProductController::class,'search']);
Route::get('get/{cat}',[ProductController::class,'get_category']);
Route::get('detail/{id}',[ProductController::class,'detail']);


//CartController::class
Route::get('cart',[CartController::class,'cart_list'])->name('cart');
Route::get('AddCart/{id}',[CartController::class,'add_to_cart']);
Route::get('num',[CartController::class,'num_of_cart_prod']);
Route::get('cart_delete/{id}',[CartController::class,'delete_from_cart']);
Route::get('ClearCart',[CartController::class,'clear_cart']);
Route::post('cart/{id}',[CartController::class,'crement_quantity']);



//ContactController::class
Route::post('contact',[ContactController::class,'msg']);
//->middleware('auth:sanctum')


//OrderController::class
Route::post('/continue_shopping',[OrderController::class,'make_order']);
Route::get('/dashboard',[OrderController::class,'get_orders']);
Route::get('/order/{id}',[OrderController::class,'get_order']);


//AdminController::class
Route::get('/admin',[AdminController::class,'index']);
Route::get('message/{id}',[AdminController::class,'message']);


//WishController::class
Route::get('/wishes',[WishController::class,'get_data_form_db']);
Route::get('/AddWish/{id}',[WishController::class,'add_to_list']);
Route::get('wish_delete/{id}',[WishController::class,'delete_from_wish']);
Route::get('ClearWishes',[WishController::class,'clear_wishes']);

