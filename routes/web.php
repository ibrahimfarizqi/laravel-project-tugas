<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\AuthController;

// Public Routes
Route::get('/', [TemplateController::class, 'index'])->name('home');
Route::post('/template/{id}/like', [TemplateController::class, 'like'])->name('template.like');
Route::post('/template/{id}/view', [TemplateController::class, 'incrementView'])->name('template.view');

// Auth Routes (Guest Only)
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected Admin Routes
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [TemplateController::class, 'adminIndex'])->name('admin.index');
    Route::get('/create', [TemplateController::class, 'create'])->name('admin.create');
    Route::post('/store', [TemplateController::class, 'store'])->name('admin.store');
    Route::get('/edit/{id}', [TemplateController::class, 'edit'])->name('admin.edit');
    Route::put('/update/{id}', [TemplateController::class, 'update'])->name('admin.update');
    Route::delete('/delete/{id}', [TemplateController::class, 'destroy'])->name('admin.destroy');
});