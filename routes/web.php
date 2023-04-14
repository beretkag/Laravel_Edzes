<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EdzesController;

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

Route::get('/',  [EdzesController::class, 'index']);
// Route::get('/newproduct',  [ProductsController::class, 'create']);
// Route::post('/newproduct',  [ProductsController::class, 'store']);
// Route::get('/editproduct/{id}',  [ProductsController::class, 'edit']);
// Route::patch('/editproduct/{id}',  [ProductsController::class, 'update']);
// Route::get('/deleteproduct/{id}',  [ProductsController::class, 'show']);
// Route::delete('/deleteproduct/{id}',  [ProductsController::class, 'destroy']);
