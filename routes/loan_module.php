<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\AppliedLoansController;
use App\Http\Controllers\HoldLoansController;
use App\Http\Controllers\ProcessingLoansController;
use App\Http\Controllers\ApprovedLoansController;
use App\Http\Controllers\RejectedLoansController;
use App\Http\Controllers\SanctionedLoansController;
use App\Http\Controllers\DisbursedLoansController;
use App\Http\Controllers\ContactEnquiryController;
use App\Http\Controllers\AllwebEnquiryController;
use App\Http\Controllers\LeadManagementController;


Route::get('/verification', [VerificationController::class, 'index'])->name('verification.loan');
Route::get('/appliedloans', [AppliedLoansController::class, 'index'])->name('appliedloans.loan');
Route::get('/holdloans', [HoldLoansController::class, 'index'])->name('holdloans.loan');
Route::get('/processingloans', [ProcessingLoansController::class, 'index'])->name('processingloans.loan');
Route::get('/approvedLoans', [ApprovedLoansController::class, 'index'])->name('approvedloans.loan');
Route::get('/rejectedLoans', [RejectedLoansController::class, 'index'])->name('rejectedloans.loan');
Route::get('/sanctionedLoans', [SanctionedLoansController::class, 'index'])->name('sanctionedloans.loan');
Route::get('/disbursedLoans', [DisbursedLoansController::class, 'index'])->name('disbursedloans.loan');

Route::get('/viewContactEnquiry', [ContactEnquiryController::class, 'index'])->name('viewcontact.enquiry');
Route::get('/allwebEnquiry', [AllwebEnquiryController::class, 'index'])->name('allwebenquiry.enquiry');
Route::resource('lead_management', LeadManagementController::class);
Route::get('/leadManagement', [LeadManagementController::class, 'index'])->name('lead.management');
?>