<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::get('alltestdata', [
//     TestController::class,
//     'index'
// ]);

// adding routes 

Route::post('addproduct',[ProductController::class,'add']);

Route::put('updateproduct/{id}',[ProductController::class,'update']);

Route::get('allproduct/',[ProductController::class,'index']);

Route::delete('deleteproduct/{id}/',[ProductController::class,'delete']);


Route::post('addcategory',[CategoryController::class,'add']);

Route::put('updatecategory/{id}',[CategoryController::class,'update']);

Route::get('allcategory/',[CategoryController::class,'index']);

Route::delete('deletecategory/{id}/',[CategoryController::class,'delete']);


Route::post('addreview',[ReviewController::class,'add']);

Route::put('updatereview/{id}',[ReviewController::class,'update']);

Route::get('allreview/',[ReviewController::class,'index']);

Route::delete('deletereview/{id}/',[ReviewController::class,'delete']);


Route::post('addorder',[OrderController::class,'add']);

Route::put('updateorder/{id}',[OrderController::class,'update']);

Route::get('allorder/',[OrderController::class,'index']);

Route::delete('deleteorder{id}/',[OrderController::class,'delete']);


Route::post('adduser',[UserController::class,'add']);

Route::put('updateuser/{id}',[UserController::class,'update']);

Route::get('alluser/',[UserController::class,'index']);

Route::delete('deleteuser{id}/',[UserController::class,'delete']);






