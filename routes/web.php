<?php

use App\Http\Controllers\backend\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;

Route::get('/',[DashboardController::class,'admin_panel'])->name('admin_panel');
Route::get('/admin-panel/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('/admin-panel/category-list',[CategoryController::class,'category_list'])->name('category');
Route::get('/category/add-category',[CategoryController::class,'add_category'])->name('add_category');
Route::post('/category/add-category',[CategoryController::class,'store_category'])->name('store_category');
