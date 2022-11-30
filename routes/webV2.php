<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfControllerV2;

Route::get('/cash_book', [PdfControllerV2::class, 'cashbook']);
Route::get('/bank_book', [PdfControllerV2::class, 'bank_book']);
Route::get('/live_class_report', [PdfControllerV2::class, 'live_class_report']);
Route::get('/generate_salary_sheet', [PdfControllerV2::class, 'generate_salary_sheet']);
Route::get('/employe_view', [PdfControllerV2::class, 'employe_view']);
