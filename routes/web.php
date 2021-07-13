<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;


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
    return view('Front-end.Pages.home');
})->name('front-end.home');

Route::get('/introduction', function () {
    return view('Front-end.Pages.introduction');
})->name('front-end.introduction');

Route::get('/pricing', function () {
    return view('Front-end.Pages.pricing');
})->name('front-end.pricing');

Route::get('/contact-us',[ContactController::class, 'index'])->name('front-end.contact-us');
Route::post('/contact-save',[ContactController::class, 'store'])->name('front-end.contact-us.store');
Route::post('/newsletter-save',[NewsletterController::class, 'store'])->name('front-end.newsletter.store');

Route::Post('/checkout',[CheckoutController::class, 'checkout'])->name('front-end.checkout')->middleware('auth');



Route::get('/about', function () {
    return view('Front-end.Pages.about');
})->name('front-end.about');


Route::get('/product/{id}', [CheckoutController::class, 'productDetail'])->name('front-end.product-detail');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


Route::get('/addToCart', [CheckoutController::class, 'addToCart'])->name('addToCart');
Route::post('stripe', [CheckoutController::class, 'stripePost'])->name('stripe.post')->middleware('auth');
Route::post('/addToCart', [CheckoutController::class, 'addToCart'])->name('addToCart');
Route::post('/removeFromCart', [CheckoutController::class, 'removeFromCart'])->name('removeFromCart');
Auth::routes();
