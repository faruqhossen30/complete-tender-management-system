<?php

use Illuminate\Support\Facades\Route;
// Controlles for Fond-end

// Controlles for Admin
use App\Http\Controllers\BackendController\Admin\AdminHomeController; //ok
use App\Http\Controllers\BackendController\Admin\Client\ClientController;
use App\Http\Controllers\BackendController\Admin\Tender\TenderController; //ok
use App\Http\Controllers\BackendController\Admin\Tender\CountryController; // ok
use App\Http\Controllers\BackendController\Admin\Tender\LocationController; //ok
use App\Http\Controllers\BackendController\Admin\Tender\CategoryController; // ok
use App\Http\Controllers\BackendController\Admin\Tender\TypeController; // ok
use App\Http\Controllers\BackendController\Admin\Tender\DepartmentController; // ok
use App\Http\Controllers\BackendController\User\UserHomeController;
// Client Applictions
use App\Http\Controllers\BackendController\Admin\Tender\Application\ClientApplicationsController;

// FontEndController
use App\Http\Controllers\BackendController\Admin\ClientListController;
use App\Http\Controllers\BackendController\User\ApplyUserController;
use App\Http\Controllers\FrontEndController\HomePageController;

// Controlles for Client dashboard
use App\Http\Controllers\UserProfleController;
use App\Http\Controllers\BackendController\User\AppliedTenderController;
use Illuminate\Support\Facades\Auth;

// Route for authincate Admin area
Auth::routes();

// For Admin route

Route::middleware(['auth', 'is_admin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index']);
    Route::resource('tender', TenderController::class);
    Route::resource('country', CountryController::class);
    Route::resource('location', LocationController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('type', TypeController::class);
    Route::resource('department', DepartmentController::class);
    Route::resource('client', ClientController::class);
    Route::get('client/status/{id}', [ClientController::class, 'changeStatus'])->name('change-status');
    // For Client Applications
    Route::get('application', [ClientApplicationsController::class, 'index'])->name('admin.application');
});


// For User Route
Route::middleware(['auth', 'is_client'])->prefix('user')->group(function () {
    Route::get('/', [UserHomeController::class, 'index']);
    Route::get('profile', [UserProfleController::class, 'profile'])->name('profile');
    Route::get('profile/update', [UserProfleController::class, 'create'])->name('profile.update');
    Route::post('profile/update', [UserProfleController::class, 'store'])->name('profile.store');

    Route::get('/apply', [ApplyUserController::class, 'index'])->name('apply');
    Route::post('/apply', [ApplyUserController::class, 'applyConfirm'])->name('apply.confirm');
    Route::get('application', [AppliedTenderController::class, 'index'])->name('application');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Font-End Route

Route::get('/', [HomePageController::class, 'homepage'])->name('homepage');
