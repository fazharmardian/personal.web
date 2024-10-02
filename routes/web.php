<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'home');
Route::resource('home', HomeController::class);

Route::view('/project', 'index.project')->name('project');
Route::view('/about', 'index.about')->name('about');