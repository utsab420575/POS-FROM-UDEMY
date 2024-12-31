<?php

use App\Http\Controllers\SimpleController;
use App\Http\Middleware\AgeCheck;
use Illuminate\Support\Facades\Route;

Route::get('/home-utsab-roy-vai',[SimpleController::class,'home'])->name('home');

Route::get('/about-utsab-roy-vai',[SimpleController::class,'about'])->name('about');

Route::get('/check-age',[SimpleController::class,'check_age'])
        ->middleware(AgeCheck::class);


