<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SubcategoryController;
use App\Http\Controllers\admin\BlogCategoryController;
use App\Http\Controllers\admin\BlogSubcategoryController;
use App\Http\Controllers\admin\BlogPostController;
use App\Http\Controllers\admin\MagazineController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminLoginController;
use Illuminate\Support\Facades\Auth;

// ✅ Admin Login Routes
Route::get('/admin_panel/login', [AdminLoginController::class, 'showLoginForm'])
    ->name('admin.login')
    ->middleware('guest');

Route::post('/admin_panel/login', [AdminLoginController::class, 'login'])
    ->middleware('guest');

Route::post('/admin_panel/logout', [AdminLoginController::class, 'logout'])
    ->name('admin.logout')
    ->middleware('auth');

// ✅ Redirect /admin_panel directly to dashboard or login page
Route::get('/admin_panel', function () {
    return Auth::check() && Auth::user()->is_admin
        ? redirect()->route('admin_dashboard')
        : redirect()->route('admin.login');
});

// ✅ Protect all admin routes inside authentication & admin middleware
Route::prefix('admin_panel')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard');
    
    Route::resource('categories', CategoryController::class);
    Route::resource('subcategories', SubcategoryController::class);
    Route::resource('blog_categories', BlogCategoryController::class);
    Route::resource('blog_subcategories', BlogSubcategoryController::class);
    Route::resource('blog_posts', BlogPostController::class);
    Route::resource('magazines', MagazineController::class);

    Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/contacts/{contact}', [ContactController::class, 'show'])->name('contact.show');
    Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');
});

