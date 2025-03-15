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
use App\Http\Controllers\admin\SpeakerController;
use App\Http\Controllers\admin\SponsorController;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\admin\AdvertisementController;
use App\Http\Controllers\admin\PanelDiscussionController;

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

    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');
    Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');


    //Events
    

    Route::get('/speakers', [SpeakerController::class, 'index'])->name('events.speakers.index');
    Route::get('/speakers/create', [SpeakerController::class, 'create'])->name('events.speakers.create');
    Route::post('/speakers', [SpeakerController::class, 'store'])->name('events.speakers.store');
    Route::get('/speakers/{speaker}/edit', [SpeakerController::class, 'edit'])->name('events.speakers.edit');
    Route::put('/speakers/{speaker}', [SpeakerController::class, 'update'])->name('events.speakers.update');
    Route::delete('/speakers/{speaker}', [SpeakerController::class, 'destroy'])->name('events.speakers.destroy');

  

// Display a listing of sponsors
Route::get('/sponsors', [SponsorController::class, 'index'])->name('events.sponsors.index');

// Show the form for creating a new sponsor
Route::get('/sponsors/create', [SponsorController::class, 'create'])->name('events.sponsors.create');

// Store a newly created sponsor in storage
Route::post('/sponsors', [SponsorController::class, 'store'])->name('events.sponsors.store');

// Show the form for editing the specified sponsor
Route::get('/sponsors/{sponsor}/edit', [SponsorController::class, 'edit'])->name('events.sponsors.edit');

// Update the specified sponsor in storage
Route::put('/sponsors/{sponsor}', [SponsorController::class, 'update'])->name('events.sponsors.update');

// Remove the specified sponsor from storage
Route::delete('/sponsors/{sponsor}', [SponsorController::class, 'destroy'])->name('events.sponsors.destroy');

    
// Adveristments

Route::resource('advertisements', AdvertisementController::class);




// Panel Discussions



    Route::get('/panel-discussions', [PanelDiscussionController::class, 'index'])->name('panel_discussions.index');
    Route::get('/panel-discussions/create', [PanelDiscussionController::class, 'create'])->name('panel_discussions.create');
    Route::post('/panel-discussions', [PanelDiscussionController::class, 'store'])->name('panel_discussions.store');
    Route::get('/panel-discussions/{panelDiscussion}/edit', [PanelDiscussionController::class, 'edit'])->name('panel_discussions.edit');
    Route::put('/panel-discussions/{panelDiscussion}', [PanelDiscussionController::class, 'update'])->name('panel_discussions.update');
    Route::delete('/panel-discussions/{panelDiscussion}', [PanelDiscussionController::class, 'destroy'])->name('panel_discussions.destroy');




// Faq Routes


    Route::get('/faqs', [FaqController::class, 'index'])->name('events.faqs.index');
    Route::get('/faqs/create', [FaqController::class, 'create'])->name('events.faqs.create');
    Route::post('/faqs', [FaqController::class, 'store'])->name('events.faqs.store');
    Route::get('/faqs/{faq}/edit', [FaqController::class, 'edit'])->name('events.faqs.edit');
    Route::put('/faqs/{faq}', [FaqController::class, 'update'])->name('events.faqs.update');
    Route::delete('/faqs/{faq}', [FaqController::class, 'destroy'])->name('events.faqs.destroy');





});



