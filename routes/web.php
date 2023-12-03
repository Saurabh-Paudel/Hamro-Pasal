<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

/****************************Admin Panel Routes****************************/
/****************************Admin Dashboard Routes****************************/
Route::get('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
/****************************Admin Panel Category Routes****************************/
Route::get('/admin/category', [CategoryController::class, 'index']);
Route::get('/admin/create-category', [CategoryController::class, 'create']);
Route::post('/admin/creating-category', [CategoryController::class, 'store']);
Route::get('/admin/category/{id}/edit', [CategoryController::class, 'edit']);
Route::post('/admin/category/{id}/update', [CategoryController::class, 'update']);
Route::get('/admin/category/{id}/delete', [CategoryController::class, 'delete']);
