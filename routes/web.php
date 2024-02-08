<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('BrandList',[BrandController::class,'BrandList']);
Route::get('CategoryList',[CategoryController::class,'CategoryList']);
Route::get('ListProductByCategory/{id}',[ProductController::class,'ListProductByCategory']);
Route::get('ListProductByRemark/{remark}',[ProductController::class,'ListProductByRemark']);
Route::get('ListProductByBarnd/{id}',[ProductController::class,'ListProductByBarnd']);


Route::get('ListProductSlider',[ProductController::class,'ListProductSlider']);
Route::get('ProductDetailsById/{id}',[ProductController::class,'ProductDetailsById/{id}']);
Route::get('ListReviewByProduct/{product_id}',[ProductController::class,'ListReviewByProduct/{}']);

Route::get('PolicyByType/{type}',[PolicyController::class,'PolicyByType']);


//User Auth
Route::get('/UserLogin/{UserEmail}',[UserController::class,'UserLogin']);
Route::get('/VerifyLogin/{UserEmail}/{OTP}',[UserController::class,'VerifyLogin']);
Route::get('/Logout',[UserController::class,'UserLogout']);
