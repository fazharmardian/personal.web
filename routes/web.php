<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'home');
Route::resource('home', HomeController::class)->
only('index');

Route::view('/project', 'index.project')->name('project');
Route::view('/about', 'index.about')->name('about');

Route::middleware('auth')->group(function() {

});

Route::redirect('/admin', 'admin/dashboard');
Route::view('admin/dashboard', 'admin.dashboard')->name('dashboard');

Route::resource('admin/user', UserController::class);
Route::get('admin/project', [ProjectController::class, 'index'])->name('Aproject');