<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LocaleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Yogava Yoga & Fitness template routes.
| Supports bilingual localization (English / Hindi) and theme colors.
|
*/

// Language Switcher Route
Route::get('/lang/{locale}', [LocaleController::class, 'switch'])->name('lang.switch');

// Homepages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/home-2', [PageController::class, 'home2'])->name('home.2');

// Main Pages
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/testimonials', [PageController::class, 'testimonials'])->name('testimonials');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');

// Team
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/team/details', [PageController::class, 'teamDetails'])->name('team.details');

// Services
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/services/details', [PageController::class, 'serviceDetails'])->name('services.details');

// Projects & Gallery
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/projects/details', [PageController::class, 'projectDetails'])->name('projects.details');

// Blog & News
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/details', [PageController::class, 'blogDetails'])->name('blog.details');

// Shop
Route::get('/shop', [PageController::class, 'shop'])->name('shop');
Route::get('/shop/sidebar', [PageController::class, 'shopSidebar'])->name('shop.sidebar');
Route::get('/shop/details', [PageController::class, 'shopDetails'])->name('shop.details');
Route::get('/cart', [PageController::class, 'cart'])->name('cart');
Route::get('/checkout', [PageController::class, 'checkout'])->name('checkout');

// Contact & Forms
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/newsletter', [ContactController::class, 'newsletter'])->name('newsletter.submit');

// 404 Error Page
Route::get('/404', [PageController::class, 'error404'])->name('page.404');
