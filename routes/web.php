<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UploadExcelController;
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
Route::redirect('/', '/upload-excel')->name('home');
Route::resource('products', ProductController::class)->only('index','create', 'store');
Route::resource('upload-excel', UploadExcelController::class)->except('edit', 'update', 'destroy');
