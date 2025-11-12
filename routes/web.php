<?php

use App\Http\Controllers\admin\AdminProfileController;
use App\Http\Controllers\backend\admin\DashboardController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');

Route::middleware(['auth', 'verified', 'roles:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [AdminController::class, 'destroy'])->name('logout');

    /* Control Setting  */
     Route::resource('setting', SettingController::class);

    //  /*  control Profile */
     Route::resource('/profile', AdminProfileController::class);


});
Route::middleware(['auth','verified','roles:user'])->prefix('user')->name('user.')->group(function(){

    Route::get('dashboard',[FrontendController::class,'dashboard'])->name('dashboard');
    Route::post('logout',[FrontendController::class,'destroy'])->name('logout');
});





//user credentials

//user Route

Route::get('/dashboard', [FrontendController::class, 'dashboard'])->middleware(['auth', 'verified', 'roles:user'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


require __DIR__.'/auth.php';
