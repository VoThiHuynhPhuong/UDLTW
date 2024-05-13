<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController as Sanpham;
use App\Http\Controllers\frontend\ContactController;

use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\DashboardController;

Route::get('/', [HomeController::class, 'index']); //Trang chủ
Route::get('san-pham', [ProductController::class, 'index']); //Tất cả sản phẩm
Route::get('chi-tiet-san-pham/{slug}', [ProductController::class, 'product_detail']); //chi tiết sản phẩm
Route::get('lien-he', [ContactController::class, 'index']); //liên hệ
