<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\WebsiteController::class, 'welcome'])->name('welcome');
Route::get('/about', [\App\Http\Controllers\WebsiteController::class, 'aboutpage'])->name('aboutpage');
Route::get('/gallery', [\App\Http\Controllers\WebsiteController::class, 'gallerypage'])->name('gallery-page');
Route::get('/faqs', [\App\Http\Controllers\WebsiteController::class, 'faqspage'])->name('faqs-page');
Route::get('/service_single', [\App\Http\Controllers\WebsiteController::class, 'servicepage'])->name('service-page');
Route::get('/fellowships', [\App\Http\Controllers\WebsiteController::class, 'fellowshipspage'])->name('fellowships-page');
Route::get('/fellowship_details', [\App\Http\Controllers\WebsiteController::class, 'fellowdetailspage'])->name('fellowship-details-page');

Route::get('/contacts', [\App\Http\Controllers\WebsiteController::class, 'contactspage'])->name('contactspage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
