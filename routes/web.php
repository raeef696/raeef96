<?php

use App\Http\Controllers\RaeefController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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



Route::get('/',[RaeefController::class,'index']);
Route::get('create',[RaeefController::class,'create']);
Route::post('store',[RaeefController::class,'store']);
Route::get('destroy/{id}',[RaeefController::class,'destroy']);
Route::get('edit/{id}',[RaeefController::class,'edit']);
Route::post('update/{id}', [RaeefController::class, 'update']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
