<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\DashboardController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;

Route::prefix('admin')->middleware('guest:admin')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create_Adminview'])->name('register.Admin');
 

    Route::post('register', [RegisteredUserController::class, 'store_Admin'])->name('admin.register');


    Route::get('login', [LoginController::class, 'create']) ->name('login.Admin');
    Route::post('login', [loginController::class, 'store'])->name('admin.login');

  
});






Route::prefix('admin')->middleware('auth:admin')->group(function () {


    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/Giftcardmanagement',[DashboardController::class, 'giftcard_view'])->name('admin.giftcardmanagement');
    Route::post('/product', [DashboardController::class,'store'])->name('product.store');
    Route::get('/product/create', [DashboardController::class,'createProduct'])->name('product.create');
    Route::get('/show/subcategory', [DashboardController::class,'show_subcat'])->name('show.subdetails');
    Route::post('/remove/product/{id}', [DashboardController::class,'destroy_product'])->name('product.destroy');
    // Route::get('/show/subcategory/createview', [DashboardController::class,'create_subcategoryview'])->name('create.subcategory');
    // Route::post('/store/subcategory', [DashboardController::class,'store_subcategory1'])->name('store.subcategory');


    Route::post('logout', [LoginController::class, 'destroy'])->name('logout.Admin');
}); 
