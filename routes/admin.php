<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', [\App\Http\Controllers\Admin\HomeController::class, 'home'])->name('home');

Route::middleware("guest:admin")->group(function() {
    Route::get('login', [\App\Http\Controllers\Admin\AuthController::class, 'index'])->name('login');
    Route::post('login_process', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login_process');
});

Route::middleware("auth:admin")->group(function() {
    Route::get('logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');
    Route::resource('admin_users', \App\Http\Controllers\Admin\AdminUserController::class);
    Route::resource('posts', \App\Http\Controllers\Admin\PostController::class);
    Route::resource('coaches', \App\Http\Controllers\Admin\CoachController::class);
    Route::resource('players', \App\Http\Controllers\Admin\PlayerController::class);
    Route::resource('album', \App\Http\Controllers\Admin\AlbumController::class);
    Route::resource('timetables', \App\Http\Controllers\Admin\TimetableController::class);
    Route::resource('attributes', \App\Http\Controllers\Admin\AttributeController::class);
//    Route::delete('/deletePhoto/{id}', [\App\Http\Controllers\Admin\AlbumController::class, 'deletePhoto'])->name('admin.deletePhoto');
//    Route::delete('/deleteThumbnail/{id}', [\App\Http\Controllers\Admin\AlbumController::class, 'deleteThumbnail'])->name('admin.deleteThumbnail');
});




