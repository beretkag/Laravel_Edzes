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
Route::get('/newedzes',  [EdzesController::class, 'create']);
Route::post('/newedzes',  [EdzesController::class, 'store']);
Route::get('/editedzes/{id}',  [EdzesController::class, 'edit']);
Route::patch('/editedzes/{id}',  [EdzesController::class, 'update']);
Route::get('/deleteedzes/{id}',  [EdzesController::class, 'show']);
Route::delete('/deleteedzes/{id}',  [EdzesController::class, 'destroy']);
