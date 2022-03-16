<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\ContactController;

Route::get('', [HomeController::class, 'index']);

Route::get('/contacts/show', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contacts/create', [ContactController::class, 'index'])->name('contact.create');