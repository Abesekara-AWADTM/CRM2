<?php

use App\Http\Controllers\AddOrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddProductController;
use App\Models\product;

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

Route::get('/addorder', function () {
    return view('AddOrderController');
});

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/add_orders',[AddOrderController::class,'AddOrderDetails']);

Route::get('/addproduct', function () {
    return view('AddProductController');});

Route::post('/addProduct',[AddProductController::class,'AddProduct']);

 //Route::get('/ViewProducts',[AddProductController::class, 'ViewProduct']);
 Route::get('/ViewProducts','App\Http\Controllers\AddProductController@ViewProduct');

Route::get('/edit/{ProductID}',[AddProductController::class, 'EditProducts']);
Route::post('/editproduct',[AddProductController::class,'ShowUpdatesProducts']);
Route::get('/delete/{ProductID}',[AddProductController::class,'DeleteProducts']);
Route::get('/search',[AddProductController::class,'SearchProducts']);








