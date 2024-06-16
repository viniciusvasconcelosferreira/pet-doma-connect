<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\AizUploadController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterSubscribersController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::name('frontend.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/sobre', function () {
        return view('frontend.about.index');
    })->name('about');

    Route::controller(AboutController::class)->group(function () {
        Route::get('/sobre', 'index')->name('about');
    });

    Route::controller(ServiceController::class)->group(function () {
        Route::get('/servicos', 'index')->name('services');
        Route::get('/servicos/{service:slug}', 'show')->name('services.show');
    });

    Route::controller(BlogPostController::class)->group(function () {
        Route::get('/blog', 'index')->name('blog');
        Route::get('/blog/{post:slug}', 'show')->name('blog.show');
    });

    Route::controller(ContactController::class)->group(function () {
        Route::get('/contato', 'index')->name('contact');
        Route::post('/contato/enviar', 'store')->name('contact.store');
    });

    Route::controller(NewsletterSubscribersController::class)->group(function () {
        Route::post('/newsletter-subscribe', 'store')->name('newsletter.subscribe');
    });

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
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });

    Route::controller(FooterController::class)->group(function () {
        Route::get('/footer', 'edit')->name('footer.edit');
        Route::patch('/footer/social-media', 'updateSocialMedia')->name('footer.social-media.update');
        Route::patch('/footer/contact', 'updateContactInformation')->name('footer.contact.update');
    });
});

require __DIR__.'/auth.php';
