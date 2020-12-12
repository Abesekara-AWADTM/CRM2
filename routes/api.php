<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddOrderController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("/AddOrder",[AddOrderController::class,'AddOrderDetails']);
Route::get("/GetOrder",[AddOrderController::class,'GetOrderDetails']);
Route::delete("/DeleteOrder/{CustomerID}",[AddOrderController::class,'DeleteOrderDetails']);
Route::put("/UpdateOrder/{CustomerID}",[AddOrderController::class,'UpdateOrderDetails']);
Route::get("/SearchOrder/{Name}",[AddOrderController::class,'SearchOrderDetails']);
Route::get("/SearchCustomer/{CustomerID}",[AddOrderController::class,'SearchOrder']);
