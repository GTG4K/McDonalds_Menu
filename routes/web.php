<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Models\Product;

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

Route::get('/', [ProductsController::class, "home"]);

Route::get('/products', [ProductsController::class, "index"]);
Route::get('/products/burgers', [ProductsController::class, "burgers"]);
Route::get('/products/drinks', [ProductsController::class, "drinks"]);
Route::get('/products/create',[ProductsController::class, "create"]);
Route::get('/products/edit/{id}',[ProductsController::class,"edit"]);
Route::get('/products/delete/{id}',[ProductsController::class,"delete"]);
Route::get('/products/{id}', [ProductsController::class, "show"]);

Route::post('/products', [ProductsController::class, "store"]);
Route::post('/products/modify',[ProductsController::class, "modify"]);
