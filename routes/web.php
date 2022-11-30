<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admission_form', [PdfController::class, 'admission_form']);
Route::get('/student_id_card', [PdfController::class, 'student_id_card']);
Route::get('/student_id', [PdfController::class, 'student_id']);
Route::get('/testimonial', [PdfController::class, 'testimonial']);

// accounts
Route::get('/account_ledger', [PdfController::class, 'account_ledger']);
Route::get('/balance_sheet', [PdfController::class, 'balance_sheet']);
Route::get('/trial_balance', [PdfController::class, 'trial_balance']);
Route::get('/student_migration', [PdfController::class, 'student_migration']);
Route::get('/student_daily_attendence_summary', [PdfController::class, 'student_daily_attendence_summary']);
Route::get('/student_attendence_detail', [PdfController::class, 'student_attendence_detail']);
Route::get('/exam_admit_card', [PdfController::class, 'exam_admit_card']);
Route::get('/student_ledger', [PdfController::class, 'student_ledger']);
Route::get('/sms_details', [PdfController::class, 'sms_details']);
Route::get('/quickCollectionDetails', [PdfController::class, 'quickCollectionDetails']);
