<?php

use App\Http\Controllers\backend\admin\DashboardController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified','role:user'])->prefix('user')->name('user.')->group(function(){
    
    Route::get('dashboard',[UserController::class,'dashboard'])->name('dashboard');
    
});

Route::middleware(['role:admin','auth','verified'])->prefix('admin/')->name('admin.')->group(function(){
    Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
