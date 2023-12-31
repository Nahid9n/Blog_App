<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
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

Route::get('/',[WebsiteController::class,'index'])->name('home');
Route::get('/blog-category',[WebsiteController::class,'category'])->name('blog-category');
Route::get('/blog-detail',[WebsiteController::class,'detail'])->name('blog-detail');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
//    category Route Start here
    Route::get('/category/add',[CategoryController::class,'index'])->name('add.category');
    Route::post('/category/store',[CategoryController::class,'store'])->name('store.category');
    Route::get('/category/manage',[CategoryController::class,'manage'])->name('manage.category');
    Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('edit.category');
    Route::post('/category/update/{id}',[CategoryController::class,'update'])->name('update.category');
    Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('delete.category');

//    category Route end here
//    Blog Route Start here
    Route::get('/blog/add',[BlogController::class,'index'])->name('blog.add');
    Route::post('/blog/store',[BlogController::class,'store'])->name('blog.store');
    Route::get('/blog/manage',[BlogController::class,'manage'])->name('blog.manage');
    Route::get('/blog/edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
    Route::post('/blog/update/{id}',[BlogController::class,'update'])->name('blog.update');
    Route::get('/blog/delete/{id}',[BlogController::class,'delete'])->name('blog.delete');
//    Blog Route end here


});
