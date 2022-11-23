<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('brand',[BrandController::class,'index']);
Route::post('store-brand',[BrandController::class,'store']);
Route::get('brand-list',[BrandController::class,'view']);
Route::get('brand-edit/{id}',[BrandController::class,'edit']);
Route::post('update-brand',[BrandController::class,'update']);
Route::get('delete-brand/{id}',[BrandController::class,'destroy']);