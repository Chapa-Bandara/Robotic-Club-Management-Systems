<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use App\Http\Controllers\Manage;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/project/home', [Manage::class, 'home'])->name('project.home');
Route::get('/project/login', [Manage::class, 'login'])->name('project.login');
Route::get('/project/register', [Manage::class, 'register'])->name('project.register');
Route::get('/project/dashboard', [Manage::class, 'dashboard'])->name('project.dashboard');
Route::get('/project/about', [Manage::class, 'about'])->name('project.about');
Route::get('/project/catagory', [Manage::class, 'category'])->name('project.category');
Route::get('/project/transaction', [Manage::class, 'trance'])->name('project.trance');
Route::get('/project/payment', [Manage::class, 'payment'])->name('project.payment');
Route::get('/project/course', [Manage::class, 'course'])->name('project.course');
Route::get('/project/contact', [Manage::class, 'contact'])->name('project.contact');
require __DIR__.'/auth.php';
