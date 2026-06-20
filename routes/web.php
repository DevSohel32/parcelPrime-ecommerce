<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::middleware(['auth'])->group(function(){
    Route::get('/account-dashboard',[UserController::class, 'index'])->name('user.dashboard');
});

Route::middleware(['auth', AuthAdmin::class])->prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'index'])->name('admin.index');

    Route::get('/brands', [AdminController::class, 'brands'])->name('admin.brands');
    Route::get('/brand/create', [AdminController::class, 'brands_create'])->name('admin.brand.create');

});
