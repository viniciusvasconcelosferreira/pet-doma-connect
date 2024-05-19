<?php

use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterSubscribersController;
use Illuminate\Support\Facades\Route;

Route::name('frontend.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/sobre', function () {
        return view('frontend.about.about');
    })->name('about');
    Route::get('/servicos', function () {
        return view('frontend.services.services');
    })->name('services');
    Route::get('/blog', function () {
        return view('frontend.blog.blog');
    })->name('blog');
    Route::get('/contato', function () {
        return view('frontend.contact.contact');
    })->name('contact');
    Route::post('/newsletter-subscribe', [NewsletterSubscribersController::class, 'store'])->name('newsletter.subscribe');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/footer', [FooterController::class, 'edit'])->name('footer.edit');
    Route::patch('/footer/social-media', [FooterController::class, 'updateSocialMedia'])->name('footer.social-media.update');
    Route::patch('/footer/contact', [FooterController::class, 'updateContactInformation'])->name('footer.contact.update');
});

require __DIR__ . '/auth.php';
