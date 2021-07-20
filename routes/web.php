<?php

use Illuminate\Support\Facades\Route;
// Controlles for Fond-end

// Controlles for Admin
use App\Http\Controllers\BackendController\Admin\AdminHomeController; //ok
use App\Http\Controllers\BackendController\Admin\Tender\TenderController; //ok
use App\Http\Controllers\BackendController\Admin\Tender\CountryController; // ok
use App\Http\Controllers\BackendController\Admin\Tender\LocationController; //ok
use App\Http\Controllers\BackendController\Admin\Tender\CategoryController; // ok
use App\Http\Controllers\BackendController\Admin\Tender\TypeController; // ok
use App\Http\Controllers\BackendController\Admin\Tender\DepartmentController;
use App\Http\Controllers\BackendController\Admin\ClientListController;
// Controlles for Client dashboard
use App\Http\Controllers\BackendController\User\UserHomeController;

// Route for authincate Admin area
Auth::routes();

// For Admin route

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin', [AdminHomeController::class, 'index']);
    Route::resource('tender', TenderController::class);
    Route::resource('country', CountryController::class);
    Route::resource('location', LocationController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('type', TypeController::class);
    Route::resource('department', DepartmentController::class);
});


// For User Route
Route::middleware(['auth', 'is_client'])->group(function () {
    Route::get('/user', [UserHomeController::class, 'index']);

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
