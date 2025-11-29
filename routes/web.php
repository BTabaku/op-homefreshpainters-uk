<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ServiceAreasController;
use App\Http\Controllers\ServiceWarrantyController;
use App\Http\Controllers\BeforeAfterController;
use App\Http\Controllers\OurClientsController;

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

// Main Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Services Routes
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/services/{service}', [ServicesController::class, 'show'])->name('services.show');

// About Routes
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Contact Routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Portfolio Routes
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

// Team Routes
Route::get('/our-team', [TeamController::class, 'index'])->name('team');

// Testimonials Routes
Route::get('/testimonials', [TestimonialsController::class, 'index'])->name('testimonials');

// FAQs Routes
Route::get('/faqs', [FaqsController::class, 'index'])->name('faqs');

// Pricing Routes
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');

// Service Areas Routes
Route::get('/service-areas', [ServiceAreasController::class, 'index'])->name('service-areas');

// Service Warranty Routes
Route::get('/service-warranty', [ServiceWarrantyController::class, 'index'])->name('service-warranty');

// Before & After Routes
Route::get('/before-after', [BeforeAfterController::class, 'index'])->name('before-after');

// Our Clients Routes
Route::get('/our-clients', [OurClientsController::class, 'index'])->name('our-clients');

// Legacy route for compatibility
Route::get('/index', [HomeController::class, 'index'])->name('index.legacy');