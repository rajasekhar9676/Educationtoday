<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SubcategoryController;
use App\Http\Controllers\admin\BlogCategoryController;
use App\Http\Controllers\admin\BlogSubcategoryController;
use App\Http\Controllers\admin\BlogPostController;
use App\Http\Controllers\admin\MagazineController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\CKEditorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\admin\SeoMetaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', function () {
    return view('welcome');
});
// Route::get('/admin_panel', function () {
//     return view('admin_panel.admin_dashboard');
// });

// Route::get('/navbar',function(){
//     return view('navbar');
// });
// Route::get('/sidebar',function(){
//     return view('sidebar
//     ');
// });



// Route::get('/buttons', function () {
//     return view('buttons');
// })->name('buttons');

// Route::get('/dropdowns', function () {
//     return view('dropdowns');
// })->name('dropdowns');

// Route::get('/typography', function () {
//     return view('typography');
// })->name('typography');



// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');

// Route::get('/error-404', function () {
//     return view('errors.404');
// })->name('error.404');

// Route::get('/documentation', function () {
//     return view('documentation');
// })->name('documentation');

// Route::resource('categories', CategoryController::class);

// Route::resource('subcategories', SubcategoryController::class);

// Route::resource('blog_categories', BlogCategoryController::class);

// Route::resource('blog_subcategories', BlogSubcategoryController::class);


// Route::resource('blog_posts', BlogPostController::class);





// Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');
// Route::get('/contacts/{contact}', [ContactController::class, 'show'])->name('contact.show');
// Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');



Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/magazines', function () {
    return view('magazine');
});


Route::get('/blogs', function () {
    return view('blogs.index');
});

Route::get('/blog-details', function () {
    return view('blogs.blog-details');
});
Route::get('/category', function () {
    return view('blogs.category');
});




Route::post('ckeditor/upload', [CKEditorController::class, 'upload'])->name('ckeditor.upload');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');






