<?php

use Illuminate\Support\Facades\Route;




Route::resource('profesional', ProfesionalController::class);

Route::get('/home', [HomeController::class, 'index'])->name('home');
