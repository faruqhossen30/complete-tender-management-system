<?php

use Illuminate\Support\Facades\Route;
// Controlles for Fond-end

// Controlles for Admin
use App\Http\Controllers\BackendController\Admin\AdminHomeController; //ok
use App\Http\Controllers\BackendController\Admin\ClientListController;
use App\Http\Controllers\BackendController\Admin\Tender\LocationController;
use App\Http\Controllers\BackendController\Admin\Tender\TenderController; //ok

// Controlles for Client dashboard
use App\Http\Controllers\BackendController\User\UserHomeController;



// Route for authincate Admin area
Auth::routes();

// For Admin route

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin', [AdminHomeController::class, 'index']);
    Route::resource('tender', TenderController::class);
});


// For User Route
Route::middleware(['auth', 'is_client'])->group(function () {
    Route::get('/user', [UserHomeController::class, 'index']);

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
