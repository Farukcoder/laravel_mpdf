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
