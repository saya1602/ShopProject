<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\LocalizationController;

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
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::get('/', [ProductController::class, 'index']);
Route::get('/contacts', function() {
    return view('contacts');
});
Route::view('/register', 'register');
Route::post('/login', [CustomerController::class, 'login']);
Route::post('/register', [CustomerController::class, 'register']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::post('/add_to_cart', [ProductController::class, 'addToCart']);
Route::get("/cartList",[ProductController::class,'cartList']);
Route::get("removecart/{id}",[ProductController::class,'removeCart']);
Route::get("ordernow",[ProductController::class,'orderNow']);  
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);
Route::get("search",[ProductController::class,'search']);
Route::get('/sendemail', [SendEmailController::class,'index']);
Route::post('/sendemail/send', [SendEmailController::class,'send']);
Route::resource('/reviews',  ReviewsController::class);
Route::get('/rev', [ReviewsController::class, 'display']);
Route::post('detail', [ReviewsController::class, 'store'])->name('add-review');
Route::get('/{lang}', [LocalizationController::class, 'index']);
