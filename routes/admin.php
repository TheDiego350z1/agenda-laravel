<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\ContactController;

Route::get('', [HomeController::class, 'index']);

Route::resource('/contacts', ContactController::class);