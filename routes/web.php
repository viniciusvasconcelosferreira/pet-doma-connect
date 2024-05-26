<?php

use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\AizUploadController;
use App\Http\Controllers\ContactController;
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
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
    Route::post('/newsletter-subscribe',
        [NewsletterSubscribersController::class, 'store'])->name('newsletter.subscribe');
    Route::get('/politica-de-privacidade', function () {
        return view('frontend.terms_policies.privacy');
    })->name('privacy');
    Route::get('/termos-e-condicoes', function () {
        return view('frontend.terms_policies.conditions');
    })->name('conditions');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// AIZ Uploader
Route::controller(AizUploadController::class)->group(function () {
    Route::post('/aiz-uploader', 'show_uploader');
    Route::post('/aiz-uploader/upload', 'upload');
    Route::get('/aiz-uploader/get_uploaded_files', 'get_uploaded_files');
    Route::post('/aiz-uploader/get_file_by_ids', 'get_preview_files');
    Route::get('/aiz-uploader/download/{id}', 'attachment_download')->name('download_attachment');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/footer', [FooterController::class, 'edit'])->name('footer.edit');
    Route::patch('/footer/social-media',
        [FooterController::class, 'updateSocialMedia'])->name('footer.social-media.update');
    Route::patch('/footer/contact',
        [FooterController::class, 'updateContactInformation'])->name('footer.contact.update');
});

require __DIR__.'/auth.php';
