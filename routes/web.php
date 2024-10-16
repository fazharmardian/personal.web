<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'home');
Route::resource('home', HomeController::class)->
only('index');

Route::view('/project', 'index.project')->name('project');
Route::view('/about', 'index.about')->name('about');

Route::redirect('/admin', 'admin/dashboard');
Route::view('admin/dashboard', 'admin.dashboard')->name('dashboard');

Route::view('admin/project', 'admin.project')->name('Aproject');