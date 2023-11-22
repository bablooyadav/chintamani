<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VerificationController;

Route::get('/verification', [VerificationController::class, 'index'])->name('verification.loan');
?>