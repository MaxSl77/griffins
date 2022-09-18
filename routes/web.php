<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');
Route::get('/erip', [\App\Http\Controllers\IndexController::class, 'erip'])->name('erip');

Route::get('/search', [\App\Http\Controllers\IndexController::class, 'search'])->name('search');


Route::prefix('posts')->group(function () {
    Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name('posts');
    Route::get('/{id}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
});

Route::prefix('coaches')->group(function () {
    Route::get('/', [\App\Http\Controllers\CoachController::class, 'index'])->name('coaches');
    Route::get('/{id}', [\App\Http\Controllers\CoachController::class, 'show'])->name('coaches.show');
});

Route::prefix('players')->group(function () {
    Route::get('/', [\App\Http\Controllers\PlayerController::class, 'index'])->name('players');
    Route::get('/{id}', [\App\Http\Controllers\PlayerController::class, 'show'])->name('players.show');
});

Route::prefix('attributes')->group(function () {
    Route::get('/', [\App\Http\Controllers\AttributesController::class, 'index'])->name('attributes');
    Route::get('/{id}', [\App\Http\Controllers\AttributesController::class, 'show'])->name('attributes.show');
});

Route::prefix('albums')->group(function () {
    Route::get('/', [\App\Http\Controllers\AlbumController::class, 'index'])->name('albums');
    Route::get('/{id}', [\App\Http\Controllers\AlbumController::class, 'show'])->name('albums.show');
});

Route::prefix('timetable')->group(function () {
    Route::get('/', [\App\Http\Controllers\TimetableController::class, 'index'])->name('timetable');
});

Route::middleware("auth:web")->group(function () {
    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

    Route::post('/posts/comment/{id}', [\App\Http\Controllers\PostController::class, 'comment'])->name('comment');
});

Route::middleware("guest:web")->group(function () {
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login_process', [\App\Http\Controllers\AuthController::class, 'login'])->name('login_process');

    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register_process', [\App\Http\Controllers\AuthController::class, 'register'])->name('register_process');

    Route::get('/forgot', [\App\Http\Controllers\AuthController::class, 'showForgotForm'])->name('forgot');
    Route::post('/forgot_process', [\App\Http\Controllers\AuthController::class, 'forgot'])->name('forgot_process');
});

Route::get('/contacts', [\App\Http\Controllers\IndexController::class, 'showContactForm'])->name('contacts');
Route::post('/contact_form_process', [\App\Http\Controllers\IndexController::class, 'contactForm'])->name('contact_form_process');




