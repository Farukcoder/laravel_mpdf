<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PdfControllerV2;

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
Route::get('/print_routine', [PdfController::class, 'print_routine']);
Route::get('/print_invoice_file', [PdfController::class, 'print_invoice_file']);
Route::get('/employe_attendence_details', [PdfController::class, 'employe_attendence_details']);
Route::get('/employee_daily_attendence_summary', [PdfController::class, 'employee_daily_attendence_summary']);
Route::get('/employee_id', [PdfController::class, 'employee_id']);
Route::get('/process_report', [PdfController::class, 'process_report']);


Route::get('/cash_book', [PdfControllerV2::class, 'cashbook']);
Route::get('/bank_book', [PdfControllerV2::class, 'bank_book']);
Route::get('/live_class_report', [PdfControllerV2::class, 'live_class_report']);
Route::get('/generate_salary_sheet', [PdfControllerV2::class, 'generate_salary_sheet']);
Route::get('/employe_view', [PdfControllerV2::class, 'employe_view']);
Route::get('/merit_list', [PdfControllerV2::class, 'merit_list']);
Route::get('/receive_voucher', [PdfControllerV2::class, 'receive_voucher']);

Route::get('/student_wise_transcipt', [PdfController::class, 'student_wise_transcipt']);
Route::get('/syllabus', [PdfController::class, 'syllabus']);
Route::get('/account_payable_receivable', [PdfController::class, 'account_payable_receivable']);
Route::get('/fees_collection_report', [PdfController::class, 'fees_collection_report']);
Route::get('/pay_slip', [PdfController::class, 'pay_slip']);
Route::get('/print_exam_routine', [PdfController::class, 'print_exam_routine']);
Route::get('/salary_report', [PdfController::class, 'salary_report']);
Route::get('/accademic_transcript', [PdfController::class, 'accademic_transcript']);

