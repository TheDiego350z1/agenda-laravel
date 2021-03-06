<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;

Route::get('', [HomeController::class, 'index']);

Route::resource('/contacts', ContactController::class);
Route::resource('/events', EventController::class);
Route::resource('/users', UserController::class)->names('admin.users');