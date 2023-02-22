<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', [\App\Http\Controllers\Admin\HomeController::class, 'home'])->name('home');

Route::middleware("guest:admin")->group(function() {
    Route::get('login', [\App\Http\Controllers\Admin\AuthController::class, 'index'])->name('login');
    Route::post('login_process', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login_process');
});

Route::middleware("auth:admin")->group(function() {
    Route::get('logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');
    Route::delete('deletePhoto/{id}', [\App\Http\Controllers\Admin\AlbumController::class, 'deletePhoto'])->name('deletePhoto');
    Route::resource('admin_users', \App\Http\Controllers\Admin\AdminUserController::class);
    Route::resource('posts', \App\Http\Controllers\Admin\PostController::class);
    Route::resource('coaches', \App\Http\Controllers\Admin\CoachController::class);
    Route::resource('players', \App\Http\Controllers\Admin\PlayerController::class);
    Route::resource('events', \App\Http\Controllers\Admin\EventController::class)->except(['show']);
    Route::resource('teams', \App\Http\Controllers\Admin\EventController::class)->except(['show']);
    Route::resource('attributes', \App\Http\Controllers\Admin\AttributeController::class);
    Route::resource('teams', \App\Http\Controllers\Admin\TeamController::class);
    Route::resource('albums', \App\Http\Controllers\Admin\AlbumController::class)->names([
        'edit' => 'albums.edit',
        'create' => 'albums.create',
        'show' => 'albums.show',
        'index' => 'albums.index',
        'store' => 'albums.store',
        'update' => 'albums.update',
        'destroy' => 'albums.delete',
    ]);
});




