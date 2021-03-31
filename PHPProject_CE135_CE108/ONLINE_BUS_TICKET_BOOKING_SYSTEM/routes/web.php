<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
   return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('admin');
})->name('admin');


Route::post('addbus',[mycontroller::class,'addbus']);
Route::view('addbus','addbus');

Route::get('findbus',[mycontroller::class,'findbus']);
Route::post("buslist",[mycontroller::class,'buslist']);
Route::get('reservation{id}',[mycontroller::class,'reservation']);
Route::post('success{id}',[mycontroller::class,'success']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
