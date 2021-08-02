<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\AuthController;
Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/detail', function () {
    return view('email_detail');
})->name('detail-email')->middleware('auth');

// Auth
Route::get('/login', [AuthController::class, 'login_view'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login_auth'])->name('login-auth')->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Companies
Route::get('/companies', [CompaniesController::class, 'companies'])
    ->name('companies')
    ->middleware('auth');
Route::post('/companies', [CompaniesController::class, 'new_company'])
    ->name('new-company')
    ->middleware('auth');