<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

use App\Http\Controllers\OrderController;


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


Route::post('addusers',[
    UsersController::class,
    'store',
]); 

Route::get('allusers',[
    UsersController::class,
    'index',
]);

Route::post('addorder',[
    OrderController::class,
    'store',
]);