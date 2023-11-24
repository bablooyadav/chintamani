<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\AppliedLoansController;
use App\Http\Controllers\HoldLoansController;
use App\Http\Controllers\ProcessingLoansController;

Route::get('/verification', [VerificationController::class, 'index'])->name('verification.loan');
Route::get('/appliedloans', [AppliedLoansController::class, 'index'])->name('appliedloans.loan');
Route::get('/holdloans', [HoldLoansController::class, 'index'])->name('holdloans.loan');
Route::get('/processingloans', [ProcessingLoansController::class, 'index'])->name('processingloans.loan');
?>