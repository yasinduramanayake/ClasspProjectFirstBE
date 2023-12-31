<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\ReviewsController;
=======
use App\Http\Controllers\UsersController;
>>>>>>> sheyan
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

Route::post('addreview', [
    ReviewsController::class,
    'store'
]);

Route::get('allreviews', [
    ReviewsController::class,
    'index'
]);
// Route::get('alltestdata', [
//     TestController::class,
//     'index'
// ]);

// adding routes 

<<<<<<< HEAD
Route::post('addproduct', [ProductController::class, 'add']);

Route::put('updateproduct/{id}', [ProductController::class, 'update']);

Route::get('allproduct/', [ProductController::class, 'index']);

Route::delete('deleteproduct/{id}/', [ProductController::class, 'delete']);
Route::post("addcategory", [CategoryController::class, 'store',]);
Route::get("getallcategory", [CategoryController::class, 'getallcategory',]);
Route::put("updatecategory/{id}", [CategoryController::class, 'updatecategory',]);
Route::delete("deletecategory/{id}", [CategoryController::class, 'deletecategory',]);
=======
Route::post('addusers',[
    UsersController::class,
    'store',
]); 

Route::get('allusers',[
    UsersController::class,
    'index',
]);
>>>>>>> sheyan
